<?php
namespace Solution\Leetcode;

class Solution1470
{
    function shuffle(array $numbers, int $n): array
    {
        $shuffles = [];
        for ($i = 0; $i < $n; $i++)
        {
            $shuffles[] = $numbers[$i];
            $shuffles[] = $numbers[$n + $i];
        }
        return $shuffles;
    }
}