<?php

namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1460;

class Solution1460Test extends TestCase
{
    private Solution1460 $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution1460();
    }

    public function testcase1()
    {
        $expected = true;
        $actual = $this->solution->canBeEqual([1, 2, 3, 4], [2, 4, 1, 3]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = true;
        $actual = $this->solution->canBeEqual([7], [7]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = false;
        $actual = $this->solution->canBeEqual([3, 7, 9], [3, 7, 11]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase4()
    {
        $expected = false;
        $actual = $this->solution->canBeEqual([5, 5, 2, 2], [6, 6, 1, 1]);
        $this->assertEquals($expected, $actual);
    }


}
