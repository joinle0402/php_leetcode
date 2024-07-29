<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1399;

class Solution1399Test extends TestCase
{
    private Solution1399 $solution;
    protected function setUp(): void { $this->solution = new Solution1399(); }

    public function testcase1()
    {
        $expected = 4;
        $actual = $this->solution->countLargestGroup(13);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 2;
        $actual = $this->solution->countLargestGroup(2);
        $this->assertEquals($expected, $actual);
    }
}
