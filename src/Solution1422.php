<?php
namespace Solution\Leetcode;

class Solution1422
{
    public function maxScore(string $string): int 
    {
        $leftScore = $string[0] == '0' ? 1 : 0;
        $rightScore = 0;
        for ($index = 0; $index < strlen($string); $index++)
            $rightScore = ($string[$index] == '1') ? $rightScore + 1 : $rightScore;
        $maxScore = -1;

        for ($index = 1; $index  < strlen($string) - 1; $index++) {
            if ($string[$index] == '0') {
                $leftScore++;
            } else {
                $rightScore--;
            }
            if ($maxScore < $leftScore + $rightScore) {
                $maxScore = $leftScore + $rightScore;
            }
        }

        return $maxScore;
    }
}

$solution = new Solution1422();
echo '<pre>';
var_dump($solution->maxScore("011101"));
echo '</pre>';
die;