<?php
namespace Solution\Leetcode;

class Solution1460
{
    public function canBeEqual(array $target, array $array): bool
    {
        sort($target);
        sort($array);
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] !== $target[$i]) {
                return false;
            }
        }
        return true;
    }
}