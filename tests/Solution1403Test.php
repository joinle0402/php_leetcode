<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1403;

class Solution1403Test extends TestCase
{
    private Solution1403 $solution;
    protected function setUp(): void { $this->solution = new Solution1403(); }

    public function testcase1()
    {
        $expected = [10,9];
        $actual = $this->solution->minSubsequence([4,3,10,9,8]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = [7,7,6];
        $actual = $this->solution->minSubsequence([4,4,7,6,7]);
        $this->assertEquals($expected, $actual);
    }
}
