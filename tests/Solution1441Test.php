<?php

namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1441;

class Solution1441Test extends TestCase
{
    private Solution1441 $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution1441();
    }

    public function testcase1()
    {
        $expected = ["Push", "Push", "Pop", "Push"];
        $actual = $this->solution->buildArray([1, 3], 3);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = ["Push", "Push", "Push"];
        $actual = $this->solution->buildArray([1, 2, 3], 3);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = ["Push", "Push"];
        $actual = $this->solution->buildArray([1, 2], 4);
        $this->assertEquals($expected, $actual);
    }
}
