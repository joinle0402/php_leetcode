<?php
namespace Solution\Leetcode;

class Solution1408
{
    function stringMatching(array $words): array {
        $length = count($words);

        $result = [];
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if (strpos($words[$i], $words[$j]) !== false) {
                    echo '<pre>';
                    var_dump($words[$j]);
                    echo '</pre>';
                    $result[] = $words[$j];
                }
                
                if (strpos($words[$j], $words[$i]) !== false) {
                    echo '<pre>';
                    var_dump($words[$i]);
                    echo '</pre>';
                    $result[] = $words[$i];
                }
            }
        }

        return array_unique($result);
    }
}

$solution = new Solution1408();
echo '<pre>';
var_dump($solution->stringMatching(["leetcoder","leetcode","od","hamlet","am"]));
echo '</pre>';
die;