<?php
namespace Solution\Leetcode;

class Solution1512
{
    public function numIdenticalPairs (array $numbers): int
    {
        $occurrences = [];
        $result = 0;
        foreach ($numbers as $number) {
            if (!empty($occurrences[$number])) {
                $result += $occurrences[$number];
                $occurrences[$number] = $occurrences[$number] + 1;
            } else {
                $occurrences[$number] = 1;
            }
        }
        return $result;
    }
}