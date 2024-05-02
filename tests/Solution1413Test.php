<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1413;

class Solution1413Test extends TestCase
{
    private Solution1413 $solution;
    protected function setUp(): void { $this->solution = new Solution1413(); }

    public function testcase1()
    {
        $expected = true;
        $actual = $this->solution->testExample();
        $this->assertEquals($expected, $actual);
    }
}
