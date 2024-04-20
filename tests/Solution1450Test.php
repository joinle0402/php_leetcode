<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1450;

class Solution1450Test extends TestCase
{
    private Solution1450 $solution;
    protected function setUp(): void { $this->solution = new Solution1450(); }

    public function testcase1()
    {
        $expected = 1;
        $actual = $this->solution->busyStudent([1,2,3], [3,2,7], 4);
        $this->assertEquals($expected, $actual);
    }

    public function testcase2()
    {
        $expected = 1;
        $actual = $this->solution->busyStudent([4], [4], 4);
        $this->assertEquals($expected, $actual);
    }
}
