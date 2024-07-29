<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1417;

class Solution1417Test extends TestCase
{
    private Solution1417 $solution;
    protected function setUp(): void { $this->solution = new Solution1417(); }

    public function testcase1()
    {
        $expected = "c2o0v1i9d";
        $actual = $this->solution->reformat("covid2019");
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = "";
        $actual = $this->solution->reformat("leetcode");
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = "";
        $actual = $this->solution->reformat("1229857369");
        $this->assertEquals($expected, $actual);
    }
}
