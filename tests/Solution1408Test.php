<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1408;

class Solution1408Test extends TestCase
{
    private Solution1408 $solution;
    protected function setUp(): void { $this->solution = new Solution1408(); }

    public function testcase1()
    {
        $expected = true;
        $actual = $this->solution->testExample();
        $this->assertEquals($expected, $actual);
    }
}
