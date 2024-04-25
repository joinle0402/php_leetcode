<?php
namespace Solution\Leetcode;

class Solution1436
{
    public function destCity(array $paths): mixed
    {
        $map = [];
        foreach ($paths as $path)
        {
            $map[$path[0]] = false;
            $map[$path[1]] = !isset($map[$path[1]]);
        }

        return $map;

        foreach ($map as $destination => $isDestination) {
            if ($isDestination) {
                return $destination;
            }
        }

        return '';
    }
}