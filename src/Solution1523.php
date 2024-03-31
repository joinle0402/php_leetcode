<?php
namespace Solution\Leetcode;

class Solution1523
{
    public function countOdds(int $low, int $high): int
    {
        $length = $high - $low + 1;
        $result = intdiv($length, 2);
        if ($length % 2 != 0 && $high % 2 != 0) {
            return $result + 1;
        }
        return $result;
    }
}