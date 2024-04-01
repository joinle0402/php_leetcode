<?php
namespace Solution\Leetcode;

class Solution1502
{
    function canMakeArithmeticProgression(array $array): bool
    {
        $min = $array[0];
        $max = $array[0];
        $elementExistMap = [];
        $elementExistMap[$array[0]] = true;
        $length = count($array);
        for ($index = 1; $index < $length; $index++) {
            if ($min > $array[$index]) $min = $array[$index];
            if ($max < $array[$index]) $max = $array[$index];
            $elementExistMap[$array[$index]] = true;
        }

        if (($max - $min) % ($length - 1) != 0) return false;

        $diff = ($max - $min) / ($length - 1);
        while ($min < $max) {
            $min += $diff;
            if (empty($elementExistMap[$min])) {
                return false;
            }
        }


        return true;
    }
}