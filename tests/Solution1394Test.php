<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1394;

class Solution1394Test extends TestCase
{
    private Solution1394 $solution;
    protected function setUp(): void { $this->solution = new Solution1394(); }

    public function testcase1()
    {
        $expected = 2;
        $actual = $this->solution->findLucky([2,2,3,4]);
        $this->assertEquals($expected, $actual);
    }

    public function testcase3()
    {
        $expected = 3;
        $actual = $this->solution->findLucky([1,2,2,3,3,3]);
        $this->assertEquals($expected, $actual);
    }
}
