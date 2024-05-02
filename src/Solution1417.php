<?php
namespace Solution\Leetcode;

class Solution1417
{
    function reformat(string $string): string
    {
        $letters = [];
        $digits = [];
        for ($index = 0; $index < strlen($string); $index++) 
        { 
            if (is_numeric($string[$index])) {
                $digits[] = $string[$index];
            } else {
                $letters[] = $string[$index];
            }
        }

        $letters_length = count($letters);
        $digits_length = count($digits);
        if (abs($letters_length - $digits_length) > 1) return '';

        $reformat = '';
        $length = ($letters_length > $digits_length) ? $digits_length : $letters_length;
        for ($index = 0; $index < $length; $index++) {
            $reformat .= $letters[$index].$digits[$index];
        }
        if ($letters_length > $digits_length) {
            return $reformat.$letters[$letters_length - 1];
        } else if ($letters_length < $digits_length) {
            return $digits[$digits_length - 1].$reformat;
        } else {
            return $reformat;
        }
    }
}