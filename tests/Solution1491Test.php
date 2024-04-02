<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1491;

class Solution1491Test extends TestCase
{
    private Solution1491 $solution;
    protected function setUp(): void { $this->solution = new Solution1491(); }

    public function testcase1()
    {
        $expected = 2500.00000;
        $actual = $this->solution->average([4000, 3000, 1000, 2000]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 2000.00000;
        $actual = $this->solution->average([1000,2000,3000]);
        $this->assertEquals($expected, $actual);
    }
}
