<?php

namespace FindValues;

use PHPUnit\Framework\TestCase;

class FindMissingValuesTest extends TestCase
{
    public function testFindMissingValuesEquals()
    {
        $inputArray = [1, 3, 5];
        $findMissingValues = new FindMissingValues();
        $this->assertEquals([2, 4], $findMissingValues->findMissingValues($inputArray));
    }

    public function testFindMissingValuesEmpty()
    {
        $inputArray = [3, 4, 5];
        $findMissingValues = new FindMissingValues();
        $this->assertEmpty($findMissingValues->findMissingValues($inputArray));
    }

    public function testFindMissingValuesContainsOnly()
    {
        $inputArray = [3, 5, 7];
        $findMissingValues = new FindMissingValues();
        $this->assertContainsOnly('integer', $findMissingValues->findMissingValues($inputArray));
    }
}
