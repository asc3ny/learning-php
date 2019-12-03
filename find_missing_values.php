<?php

/*
* @require PHP7 
*/

function findMissingValues(array $inputArray): array
{
    $resultArray = [];
    for ($number = min($inputArray); $number < max($inputArray); $number++)
    {
        if(!in_array($number, $inputArray))
        {
            array_push($resultArray, $number);
        }
    }
    return $resultArray;
}

print_r(findMissingValues($inputArray = [-2, -1, 3, 4, 5]));
print_r(findMissingValues($inputArray = [0, 2, -1, 3]));
print_r(findMissingValues($inputArray = [1, 2, 3]));
