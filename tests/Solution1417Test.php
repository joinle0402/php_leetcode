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
        $expected = true;
        $actual = $this->solution->testExample();
        $this->assertEquals($expected, $actual);
    }
}
