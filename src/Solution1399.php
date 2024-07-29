<?php
namespace Solution\Leetcode;

class Solution1399
{
    public function countLargestGroup(int $n): int
    {
        $array = [];
        $countLargestGroup = 0;
        $lengthLergestGroup = 0;
        for ($i = 1; $i <= $n; $i++) 
        {
            $sumOfDigits = 0;
            $number = $i;
            while ($number > 0) {
                $sumOfDigits += $number % 10;
                $number = intdiv($number, 10);
            }
            $array[$sumOfDigits][] = $i;
            if (count($array[$sumOfDigits]) > $lengthLergestGroup) {
                $lengthLergestGroup = count($array[$sumOfDigits]);
                $countLargestGroup = 1;
            } elseif (count($array[$sumOfDigits]) == $lengthLergestGroup) {
                $countLargestGroup++;
            }
        }
        return $countLargestGroup;
    }
}