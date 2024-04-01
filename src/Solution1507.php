<?php
namespace Solution\Leetcode;

class Solution1507
{
    function reformatDate(string $date): string
    {
        $exploded = explode(' ', $date);
        $monthMap = ["Jan" => '01', "Feb" => '02', "Mar" => '03', "Apr" => '04', "May" => '05',
            "Jun" => '06', "Jul" => '07', "Aug" => '08', "Sep" => '09', "Oct" => '10', "Nov" => '11', "Dec" => '12'];
        $day = substr($exploded[0], 0, -2);
        $day = strlen($day) == 1 ? '0'.$day : $day;
        return $exploded[2].'-'.$monthMap[$exploded[1]].'-'.$day;
    }
}