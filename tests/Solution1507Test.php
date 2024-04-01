<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1507;

class Solution1507Test extends TestCase
{
    private Solution1507 $solution;
    protected function setUp(): void { $this->solution = new Solution1507(); }

    public function testcase1()
    {
        $expected = "2052-10-20";
        $actual = $this->solution->reformatDate("20th Oct 2052");
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = "1933-06-06";
        $actual = $this->solution->reformatDate("6th Jun 1933");
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = "1960-05-26";
        $actual = $this->solution->reformatDate("26th May 1960");
        $this->assertEquals($expected, $actual);
    }
}
