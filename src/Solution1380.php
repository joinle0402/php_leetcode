<?php
namespace Solution\Leetcode;

class Solution1380
{
    public function luckyNumbers(array $matrix = []): array
    {
        $luckyNumbers = [];
        $numberOfRow = count($matrix);
        $numberOfColumn = count($matrix[0]);

        for ($i = 0; $i < $numberOfRow; $i++) {
            for ($j = 0; $j < $numberOfColumn; $j++) {
                $isLuckyNumber = true;
                for ($k = 0; $k < $numberOfRow; $k++) {
                    if ($i != $k && $matrix[$i][$j] < $matrix[$k][$j]) {
                        $isLuckyNumber = false;
                        break;
                    }
                }
                if ($isLuckyNumber) {
                    for ($k = 0; $k < $numberOfColumn; $k++) {
                        if ($j != $k && $matrix[$i][$j] > $matrix[$i][$k]) {
                            $isLuckyNumber = false;
                            break;
                        }
                    }
                    if ($isLuckyNumber) {
                        $luckyNumbers[] = $matrix[$i][$j];
                    }
                }
            }
        }

        return $luckyNumbers;
    }
}