<?php
namespace Solution\Leetcode;

class Solution1417
{
    function reformat(string $string): string
    {
        $letters = [];
        $digits = [];

        for ($i = 0; $i < strlen($string); $i++) {
            if (is_numeric($string[$i])) {
                $digits[] = $string[$i];
            } else {
                $letters[] = $string[$i];
            }
        }

        $lettersLength = count($letters);
        $digitsLength = count($digits);

        if (abs($lettersLength - $digitsLength) > 1) return "";

        $reformat = "";
        $minLength = min($lettersLength, $digitsLength);
        for ($i = 0; $i < $minLength; $i++) {
            $reformat .= $letters[$i];
            $reformat .= $digits[$i];
        }

        if ($lettersLength > $digitsLength) {
            $reformat = $reformat.$letters[$minLength];
        } elseif ($lettersLength < $digitsLength) {
            $reformat = $digits[$minLength].$reformat;
        }

        return $reformat;
    }
}