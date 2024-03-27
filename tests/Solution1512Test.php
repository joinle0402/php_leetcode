<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1512;

class Solution1512Test extends TestCase
{
    private Solution1512 $solution;
    protected function setUp(): void { $this->solution = new Solution1512(); }

    public function testcase1()
    {
        $expected = 4;
        $actual = $this->solution->numIdenticalPairs([1, 2, 3, 1, 1, 3]);
        $this->assertEquals($expected, $actual);
    }
}
