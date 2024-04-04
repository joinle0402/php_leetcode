<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1480;

class Solution1480Test extends TestCase
{
    private Solution1480 $solution;
    protected function setUp(): void { $this->solution = new Solution1480(); }

    public function testcase1()
    {
        $expected = [1,3,6,10];
        $actual = $this->solution->runningSum([1,2,3,4]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = [1,2,3,4,5];
        $actual = $this->solution->runningSum([1,1,1,1,1]);
        $this->assertEquals($expected, $actual);
    }
}
