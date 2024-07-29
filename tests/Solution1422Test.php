<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1422;

class Solution1422Test extends TestCase
{
    private Solution1422 $solution;
    protected function setUp(): void { $this->solution = new Solution1422(); }

    public function testcase1()
    {
        $expected = 5;
        $actual = $this->solution->maxScore("00111");
        $this->assertEquals($expected, $actual);
    }
}
