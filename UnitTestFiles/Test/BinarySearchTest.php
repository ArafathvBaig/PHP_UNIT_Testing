<?php

use PHPUnit\Framework\TestCase;

include 'C:\xampp\htdocs\PHP Programming\PHP_Unit_Test\src\BinarySearch.php';
/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Binary Search Test Problem
 */
class BinarySearchTest extends TestCase
{
    public $binarySearchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

    public function testGivenDataFoundShouldReturnTrue()
    {
        $binarySearch = new BinarySearch();
        $lower = 0;
        $higher = count($this->binarySearchArray) - 1;
        $result = $binarySearch->search($this->binarySearchArray, $lower, $higher, 10);
        $this->assertEquals($result, 4, $message = "Test True");
    }
    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $binarySearch = new BinarySearch();
        $lower = 0;
        $higher = count($this->binarySearchArray) - 1;
        $result = $binarySearch->search($this->binarySearchArray, $lower, $higher, 50);
        $this->assertEquals($result, -1, $message = "Test False");
    }
}
