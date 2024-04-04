<?php
namespace Solution\Leetcode;

class Solution1486
{
    function xorOperation($n, $start): int {
        $result = 0;
        for ($index = 0; $index < $n; $index++) {
            $result ^= ($start + 2 * $index);
        }
        return $result;
    }
}