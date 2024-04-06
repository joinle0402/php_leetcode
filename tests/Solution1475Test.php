<?php

namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1475;

class Solution1475Test extends TestCase
{
    private Solution1475 $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution1475();
    }

    public function testcase1()
    {
        $expected = [4, 2, 4, 2, 3];
        $actual = $this->solution->finalPrices([8, 4, 6, 2, 3]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = [1, 2, 3, 4, 5];
        $actual = $this->solution->finalPrices([1, 2, 3, 4, 5]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = [9, 0, 1, 6];
        $actual = $this->solution->finalPrices([10, 1, 1, 6]);
        $this->assertEquals($expected, $actual);
    }
}
