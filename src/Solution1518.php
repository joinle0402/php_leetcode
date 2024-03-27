<?php
namespace Solution\Leetcode;

class Solution1518
{
    public function numWaterBottles(int $numBottles, int $numExchange): int
    {
        $numEmptyBottles = $numBottles;
        $result = $numBottles;
        while ($numEmptyBottles >= $numExchange) {
            $numBottles = intdiv($numEmptyBottles, $numExchange);
            $numEmptyBottles = $numEmptyBottles % $numExchange;
            $result = $result + $numBottles;
            $numEmptyBottles = $numEmptyBottles + $numBottles;
        }
        return $result;
    }
}