<?php
namespace Solution\Leetcode;

class Solution1431
{
    static function kidsWithCandies(array $candies, int $extraCandies): array 
    {
        $maxCandy = max($candies);
        return array_map(fn ($candy) => ($candy + $extraCandies - $maxCandy) >= 0, $candies);
    }
}