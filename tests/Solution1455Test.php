<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1455;

class Solution1455Test extends TestCase
{
    private Solution1455 $solution;
    protected function setUp(): void { $this->solution = new Solution1455(); }

    public function testcase1()
    {
        $expected = 4;
        $actual = $this->solution->isPrefixOfWord("i love eating burger", "burg");
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 2;
        $actual = $this->solution->isPrefixOfWord("this problem is an easy problem", "pro");
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = -1;
        $actual = $this->solution->isPrefixOfWord("i am tired", "you");
        $this->assertEquals($expected, $actual);
    }

    public function testcase4()
    {
        $expected = 1;
        $actual = $this->solution->isPrefixOfWord("abcad", "ad");
        $this->assertEquals($expected, $actual);
    }
}
