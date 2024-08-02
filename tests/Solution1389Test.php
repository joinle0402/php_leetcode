<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1389;

class Solution1389Test extends TestCase
{
    private Solution1389 $solution;
    protected function setUp(): void { $this->solution = new Solution1389(); }

    public function testcase1()
    {
        $expected = [0,4,1,3,2];
        $actual = $this->solution->createTargetArray([0,1,2,3,4], [0,1,2,2,1]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = [0,1,2,3,4];
        $actual = $this->solution->createTargetArray([1,2,3,4,0], [0,1,2,3,0]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = [1];
        $actual = $this->solution->createTargetArray([1], [0]);
        $this->assertEquals($expected, $actual);
    }
}
