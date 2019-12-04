#!/usr/bin/php
<?php
/*
 * @require PHP7.2
 * @require PHPUnit 8.4.3
 */

require 'FindValues.php';
use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    public function testFindMissingValues()
    {
        $findValues = new FindValues;
        $this->assertContainsOnly('integer', $findValues->findMissingValues($inputArray = [2,4]));
    }
}

