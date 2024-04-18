<?php
namespace Solution\Leetcode;

class Solution1464
{
    public function maxProduct(array $array): int
    {
        $firstMax = 0;
        $secondMax = 0;
        for ($i = 0; $i < count($array); $i++) {
            if ($firstMax < $array[$i]) {
                $secondMax = $firstMax;
                $firstMax = $array[$i];
            } else if ($secondMax < $array[$i]) {
                $secondMax = $array[$i];
            }
        }
        return ($secondMax - 1) * ($firstMax - 1);
    }
}