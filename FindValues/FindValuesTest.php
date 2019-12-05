<?php

namespace FindValues;

use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    public function testFindMissingValuesEquals()
    {
        $inputArray = [1, 3, 5];
        $findValues = new FindValues();
        $this->assertEquals([2, 4], $findValues->findMissingValues($inputArray));
    }

    public function testFindMissingValuesEmpty()
    {
        $inputArray = [3, 4, 5];
        $findValues = new FindValues();
        $this->assertEmpty($findValues->findMissingValues($inputArray));
    }

    public function testFindMissingValuesContainsOnly()
    {
        $inputArray = [3, 5, 7];
        $findValues = new FindValues();
        $this->assertContainsOnly('integer', $findValues->findMissingValues($inputArray));
    }
}
