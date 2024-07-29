<?php
namespace Solution\Leetcode;

class Solution1403
{
    public function minSubsequence(array $numbers): array
    {
        rsort($numbers);
        $minSubsequence = [$numbers[0]];
        $sumLeft = $numbers[0];
        $sumRight = array_sum($numbers) - $numbers[0];
        if ($sumLeft > $sumRight) {
            return $minSubsequence;
        } else {
            for ($i = 1; $i < count($numbers); $i++) {
                $minSubsequence[] = $numbers[$i];
                $sumLeft += $numbers[$i];
                $sumRight -= $numbers[$i];
                if ($sumLeft > $sumRight) {
                    return $minSubsequence;
                }
            }
        }
        return $minSubsequence;
    }
}