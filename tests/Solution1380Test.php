<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1380;

class Solution1380Test extends TestCase
{
    private Solution1380 $solution;
    protected function setUp(): void { $this->solution = new Solution1380(); }

    public function testcase1()
    {
        $expected = [15];
        $actual = $this->solution->luckyNumbers([[3,7,8],[9,11,13],[15,16,17]]);
        $this->assertEquals($expected, $actual);
    }
}
