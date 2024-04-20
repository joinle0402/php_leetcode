<?php
namespace Solution\Leetcode;

class Solution1441
{
    function buildArray (array $target, int $n): array {
        $result = [];
        $targetIndex = 0;
        $targetLength = count($target);
        for ($i = 1; $i <= $n; $i++) {
            $result[] = 'Push';
            if ($target[$targetIndex] == $i) {
                $targetIndex++;
                if ($targetIndex == $targetLength) {
                    break;
                }
            } else {
                $result[] = 'Pop';
            }
        }
        return $result;
    }
}