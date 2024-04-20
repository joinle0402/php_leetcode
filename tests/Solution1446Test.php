<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1446;

class Solution1446Test extends TestCase
{
    private Solution1446 $solution;
    protected function setUp(): void { $this->solution = new Solution1446(); }

    public function testcase1()
    {
        $expected = 2;
        $actual = $this->solution->maxPower("leetcode");
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 5;
        $actual = $this->solution->maxPower("abbcccddddeeeeedcba");
        $this->assertEquals($expected, $actual);
    }
}
