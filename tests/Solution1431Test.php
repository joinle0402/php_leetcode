<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1431;

class Solution1431Test extends TestCase
{
    private Solution1431 $solution;
    protected function setUp(): void { $this->solution = new Solution1431(); }

    public function testcase1()
    {
        $expected = [true,true,true,false,true];
        $actual = $this->solution->kidsWithCandies([2,3,5,1,3], 3);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = [true,false,false,false,false];
        $actual = $this->solution->kidsWithCandies([4,2,1,1,2], 1);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = [true,false,true];
        $actual = $this->solution->kidsWithCandies([12,1,12], 10);
        $this->assertEquals($expected, $actual);
    }
}
