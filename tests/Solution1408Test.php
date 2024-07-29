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
        $expected = ["as","hero"];
        $actual = $this->solution->stringMatching(["mass","as","hero","superhero"]);
        $this->assertEquals($expected, $actual);
    }
}
