<?php
namespace FindValues;
use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    public function testFindMissingValues()
    {
        $findValues = new FindValues;
        $this->assertContainsOnly('integer', $findValues->findMissingValues($inputArray = [2,4]));
    }
}

