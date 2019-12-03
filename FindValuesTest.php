<?php
/*
 * @require PHP7.2
 * @require PHPUnit 8.4.3
 */

require 'FindValues.php';

use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    public function testFindMissingValues ()
    {
        $findValues = new FindValues;
        $this->assertTrue($findValues->findMissingValues($inputArray = [-2, -1, 3, 4, 5]));
    }
}
