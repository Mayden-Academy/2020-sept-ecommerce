<?php

require ('../../src/Entities/BaseProduct.php');

use PHPUnit\Framework\TestCase;

class testBaseProduct extends TestCase
{
    public function testGetID()
    {
$baseProduct = new \RobotStores\Entities\BaseProduct();
$result = $baseProduct->getID();
    }
    public function testGetTitle()
    {

    }
    public function testGetPrice()
    {

    }
    public function testGetImage()
    {

    }
}

