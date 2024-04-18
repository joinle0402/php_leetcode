<?php

namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1464;

class Solution1464Test extends TestCase
{
    private Solution1464 $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution1464();
    }

    public function testcase1()
    {
        $expected = 12;
        $actual = $this->solution->maxProduct([3, 4, 5, 2]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 16;
        $actual = $this->solution->maxProduct([1, 5, 4, 5]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = 12;
        $actual = $this->solution->maxProduct([3,7]);
        $this->assertEquals($expected, $actual);
    }
}
