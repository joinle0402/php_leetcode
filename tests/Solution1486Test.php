<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1486;

class Solution1486Test extends TestCase
{
    private Solution1486 $solution;
    protected function setUp(): void { $this->solution = new Solution1486(); }

    public function testcase1()
    {
        $expected = 8;
        $actual = $this->solution->xorOperation(5, 0);
        $this->assertEquals($expected, $actual);
    }
}
