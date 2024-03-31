<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1523;

class Solution1523Test extends TestCase
{
    private Solution1523 $solution;
    protected function setUp(): void { $this->solution = new Solution1523(); }

    public function testcase1()
    {
        $expected = 3;
        $actual = $this->solution->countOdds(3, 7);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 1;
        $actual = $this->solution->countOdds(8, 10);
        $this->assertEquals($expected, $actual);
    }
}
