<?php

namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1470;

class Solution1470Test extends TestCase
{
    private Solution1470 $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution1470();
    }

    public function testcase1()
    {
        $expected = [2, 3, 5, 4, 1, 7];
        $actual = $this->solution->shuffle([2, 5, 1, 3, 4, 7], 3);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = [1, 4, 2, 3, 3, 2, 4, 1];
        $actual = $this->solution->shuffle([1, 2, 3, 4, 4, 3, 2, 1], 4);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = [1, 2, 1, 2];
        $actual = $this->solution->shuffle([1, 1, 2, 2], 2);
        $this->assertEquals($expected, $actual);
    }
}
