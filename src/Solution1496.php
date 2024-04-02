<?php
namespace Solution\Leetcode;

class Solution1496
{
    function isPathCrossing(string $path): bool
    {
        $x = $y = 0;
        $visitedNode = ['0,0' => true];

        for ($index = 0; $index < strlen($path); $index++) {
            switch ($path[$index]) {
                case 'N':
                    $y++;
                    break;
                case 'S':
                    $y--;
                    break;
                case 'E':
                    $x++;
                    break;
                case 'W':
                    $x--;
            }
            $key = $x.','.$y;
            if (array_key_exists($key, $visitedNode)) {
                return true;
            }

            $visitedNode[$key] = true;
        }

        return false;
    }
}