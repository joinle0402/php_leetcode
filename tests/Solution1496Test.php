<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1496;

class Solution1496Test extends TestCase
{
    private Solution1496 $solution;
    protected function setUp(): void { $this->solution = new Solution1496(); }

    public function testcase1()
    {
        $expected = false;
        $actual = $this->solution->isPathCrossing('NES');
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = true;
        $actual = $this->solution->isPathCrossing('NESWW');
        $this->assertEquals($expected, $actual);
    }
}
