<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1502;

class Solution1502Test extends TestCase
{
    private Solution1502 $solution;
    protected function setUp(): void { $this->solution = new Solution1502(); }

    public function testcase1()
    {
        $expected = true;
        $actual = $this->solution->canMakeArithmeticProgression([3, 5, 1]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = false;
        $actual = $this->solution->canMakeArithmeticProgression([1,2,4]);
        $this->assertEquals($expected, $actual);
    }
}
