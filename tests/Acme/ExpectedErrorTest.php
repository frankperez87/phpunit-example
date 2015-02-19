<?php

class ExpectedErrorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailingInclude()
    {
        include 'no_existing_file.php';
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testDivideByZero()
    {
        echo 10/0;
    }

}