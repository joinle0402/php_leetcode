<?php
namespace Solution\Leetcode;

class Solution1491
{
    function average(array $salaries): float
    {
        $min = $max = $sum = $salaries[0];
        $length = count($salaries);
        for ($index = 1; $index < $length; $index++) {
            if ($min > $salaries[$index]) $min = $salaries[$index];
            if ($max < $salaries[$index]) $max = $salaries[$index];
            $sum += $salaries[$index];
        }
        return ($sum - $min - $max) / ($length - 2);
    }
}