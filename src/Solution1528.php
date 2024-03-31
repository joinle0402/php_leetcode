<?php
namespace Solution\Leetcode;

class Solution1528
{
    public function restoreString(string $string, array $indices): string
    {
        $result = '';

        foreach ($indices as $index => $value)
        {
            $result[$value] = $string[$index];
        }

        return $result;
    }
}