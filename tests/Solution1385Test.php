<?php
namespace Solution\Leetcode\Tests;

use PHPUnit\Framework\TestCase;
use Solution\Leetcode\Solution1385;

class Solution1385Test extends TestCase
{
    private Solution1385 $solution;
    protected function setUp(): void { $this->solution = new Solution1385(); }

    public function testcase1()
    {
        $expected = 2;
        $actual = $this->solution->findTheDistanceValue([4,5,8], [10,9,1,8], 2);
        $this->assertEquals($expected, $actual);
    }
}
