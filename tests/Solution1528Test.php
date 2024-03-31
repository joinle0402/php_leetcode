<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1528;

class Solution1528Test extends TestCase
{
    private Solution1528 $solution;
    protected function setUp(): void { $this->solution = new Solution1528(); }

    public function testcase1()
    {
        $expected = 'leetcode';
        $actual = $this->solution->restoreString('codeleet', [4, 5, 6, 7, 0, 2, 1, 3]);
        $this->assertEquals($expected, $actual);
    }
}
