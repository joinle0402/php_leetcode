<?php
namespace Solution\Leetcode;

class Solution1394
{
    public function findLucky(array $array): int
    {
        $frequency = array_reduce($array, function ($frequency, $number) {
            $frequency[$number] = empty($frequency[$number]) ? 1 : $frequency[$number] + 1;
            return $frequency;
        }, []);
        
        $largestLucky = -1;
        foreach ($frequency as $number => $value) {
            if ($number === $value && $number > $largestLucky) {
                $largestLucky = $number;
            }
        }
        return $largestLucky;
    }
}