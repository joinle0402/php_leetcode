<?php
namespace Solution\Leetcode;

class Solution1408
{
    public function stringMatching(array $words): array
    {
        $length = count($words);
        $response = [];

        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length; $j++) {
                if ($i !== $j && str_contains($words[$j], $words[$i])) {
                    $response[] = $words[$i];
                    break;
                }
            }
        }

        return $response;
    }
}