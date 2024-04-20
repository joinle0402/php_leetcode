<?php
namespace Solution\Leetcode;

class Solution1455
{
    function isPrefixOfWord(string $sentence, string $searchWord): int
    {
        $wordCount = 1;
        $searchWordIndex = 0;

        for ($i = 0; $i < strlen($sentence); $i++) {
            if ($sentence[$i] === ' ') {
                $wordCount++;
            }

            if ($searchWord[$searchWordIndex] == $sentence[$i]) {
                if ($i == 0 || $sentence[$i - 1] == ' ' || $searchWordIndex != 0) {
                    $searchWordIndex++;
                }
            } else {
                $searchWordIndex = 0;
            }

            if ($searchWordIndex == strlen($searchWord)) {
                return $wordCount;
            }
        }

        return -1;
    }
}