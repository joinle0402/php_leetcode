<?php
namespace Solution\Leetcode;

class Solution1385
{
    public function findTheDistanceValue(array $array1, array $array2, int $distance): int
    {
        $distanceValue = 0;

        foreach ($array1 as $value1) 
        {
            $flag = true;
            foreach ($array2 as $value2) 
            {
                if (abs($value1 - $value2) <= $distance) 
                {
                    $flag = false;
                    break;
                }
            }

            if (empty($flag)) 
            {
                $distanceValue--;
            }
            
        }

        return $distanceValue;
    }
}