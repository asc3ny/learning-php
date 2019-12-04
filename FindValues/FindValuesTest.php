<?php
namespace FindValues;
use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    public function testFindMissingValuesEquals() 
    {
        $inputArray = [-1,1,3,5];
        $findValues = new FindValues;
        $this->assertEquals([0,2,4], $findValues->findMissingValues($inputArray));
    }


    public function testFindMissingValuesEmpty()
    {
        $inputArray = [3,4];
        $findValues = new FindValues;
        $this->assertEmpty($findValues->findMissingValues($inputArray));
    }
}

