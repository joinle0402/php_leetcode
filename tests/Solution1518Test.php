<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1518;

class Solution1518Test extends TestCase
{
    private Solution1518 $solution;
    protected function setUp(): void { $this->solution = new Solution1518(); }

    public function testcase1()
    {
        $expected = 13;
        $actual = $this->solution->numWaterBottles(9, 3);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 19;
        $actual = $this->solution->numWaterBottles(15, 4);
        $this->assertEquals($expected, $actual);
    }
}
