<?php

use PHPUnit\Framework\TestCase;
use App\LinearSearch;
//include 'C:\xampp\htdocs\PHP Programming\PHP_Unit_Test\src\LinearSearch.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Linear Search Test Problem
 */
class LinearSearchTest extends TestCase
{
    public $linearSearchArray = array(99, 1, 85, 10, 100, 2, 3, 20, 5, 4);

    public function testGivenDataFoundShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->linearSearchArray, 10);
        $this->assertEquals(3, $result);
    }
    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->linearSearchArray, 50);
        $this->assertEquals(-1, $result);
    }
}
