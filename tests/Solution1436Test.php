<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1436;

class Solution1436Test extends TestCase
{
    private Solution1436 $solution;
    protected function setUp(): void { $this->solution = new Solution1436(); }

    public function testcase1()
    {
        $expected = "Sao Paulo";
        $actual = $this->solution->destCity([["London","New York"],["New York","Lima"],["Lima","Sao Paulo"]]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = "A";
        $actual = $this->solution->destCity([["B","C"],["D","B"],["C","A"]]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = "Z";
        $actual = $this->solution->destCity([["A","Z"]]);
        $this->assertEquals($expected, $actual);
    }
}
