<?php

namespace FindValues;

class FindValues
{
    public function findMissingValues(array $inputArray): array
    {
        $resultArray = [];
        for ($number = min($inputArray); $number < max($inputArray); ++$number) {
            if (!in_array($number, $inputArray)) {
                array_push($resultArray, $number);
            }
        }

        return $resultArray;
    }
}
