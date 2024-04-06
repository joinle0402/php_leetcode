<?php
namespace Solution\Leetcode;

class Solution1475
{
    function finalPrices(array $prices): array
    {
        $length = count($prices);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($prices[$i] >= $prices[$j]) {
                    $prices[$i] = $prices[$i] - $prices[$j];
                    break;
                }
            }
        }
        return $prices;
    }
}