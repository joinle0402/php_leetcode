<?php
namespace Solution\Leetcode;

class Solution1480
{
    function runningSum(array $numbers): array
    {
        $result = [];
        $sum = $numbers[0];
        $result[] = $sum;
        for ($index = 1; $index < count($numbers); $index++) {
            $sum += $numbers[$index];
            $result[] = $sum;
        }
        return $result;
    }
}