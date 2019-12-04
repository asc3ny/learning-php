<?php
namespace FindValues;
use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    public $inputArray = [2,4];
    public function testFindMissingValuesContainsOnly()
    {
        $findValues = new FindValues;

        $this->assertContainsOnly('integer', $findValues->findMissingValues($this->inputArray));
    }

    public function testFindMissingValuesNotEmpty()
    {
        $findValues = new FindValues;
        $this->assertNotEmpty($findValues->findMissingValues($this->inputArray));
    }
}

