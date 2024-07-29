<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1413;

class Solution1413Test extends TestCase
{
    private Solution1413 $solution;
    protected function setUp(): void { $this->solution = new Solution1413(); }

    public function testcase1()
    {
        $expected = 5;
        $actual = $this->solution->minStartValue([-3,2,-3,4,2]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 1;
        $actual = $this->solution->minStartValue([1,2]);
        $this->assertEquals($expected, $actual);
    }
}
