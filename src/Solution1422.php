<?php
namespace Solution\Leetcode;

class Solution1422
{
    public function maxScore(string $string): bool
    {
        $leftScore = $string[0] === '0' ? 1 : 0;
        $rightScore = 0;
        for ($i = 1; $i < strlen($string); $i++) {
            if ($string[$i] === '1') {
                $rightScore++;
            }
        }
        $maxScore = $leftScore + $rightScore;
        for ($i = 1; $i < strlen($string) - 1; $i++) {
            if ($string[$i] === '1') {
                $rightScore--;
            } else {
                $leftScore++;
            }
            $maxScore = max($maxScore, $leftScore + $rightScore);
        }
        return $maxScore;
    }
}