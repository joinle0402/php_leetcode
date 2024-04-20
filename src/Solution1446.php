<?php
namespace Solution\Leetcode;

class Solution1446
{
    function maxPower(string $string): int {
        $maxPower = 1;
        $power = 1;
        for ($i = 1; $i < strlen($string); $i++) {
            $power = ($string[$i] == $string[$i - 1]) ? $power + 1 : 1;
            if ($maxPower < $power) {
                $maxPower = $power;
            }
        }
        return $maxPower;
    }
}