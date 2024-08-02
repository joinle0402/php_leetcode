<?php
namespace Solution\Leetcode;

class Solution1389
{
    function createTargetArray(array $numbers, array $indexes): array 
    {
        $target = [];
        $targetIndex = 0;
        foreach ($indexes as $index)
        {
            if ($targetIndex === $index)
            {
                $target[$targetIndex++] = $numbers[$index];
            }
            else 
            {
                for ($i = $targetIndex; $i > $index; $i--)
                {
                    $target[$i] = $target[$i - 1];
                }
                $target[$index] = $numbers[$targetIndex++];
            }
        }

        return $target;
    }
}