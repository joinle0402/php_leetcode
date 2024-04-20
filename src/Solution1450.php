<?php
namespace Solution\Leetcode;

class Solution1450
{
    function busyStudent(array $startTime, array $endTime, int $queryTime): int
    {
        $numberOfBusyStudents = 0;
        for ($i = 0; $i < count($startTime); $i++)
        {
            if ($startTime[$i] <= $queryTime && $queryTime <= $endTime[$i])
            {
                $numberOfBusyStudents++;
            }
        }
        return $numberOfBusyStudents;
    }
}