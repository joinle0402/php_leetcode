<?php
namespace Solution\Leetcode;

class Solution1413
{
    function minStartValue(array $numbers): int {
        $minNagative = 100;
        $eachSum = 0;
        foreach ($numbers as $number) {
            $eachSum += $number;
            if ($number < 0 && $minNagative > $eachSum) {
                $minNagative = $eachSum;
            }
        }
        return (1 - $minNagative > 0) ? 1 - $minNagative : 1;
    }
}

$solution = new Solution1413();
echo '<pre>';
var_dump($solution->minStartValue([-3,2,-3,4,2]));
echo '</pre>';
die;