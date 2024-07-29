<?php
namespace Solution\Leetcode;

class Solution1413
{
    public function minStartValue(array $numbers): int
    {
        $minimumSum = 9999999;
        $sum = 0;
        foreach ($numbers as $number)
        {
            $sum = $sum + $number;
            $minimumSum = $minimumSum > $sum ? $sum : $minimumSum;
        }

        return (1 - $minimumSum < 1) ? 1 : 1 - $minimumSum;
    }
}