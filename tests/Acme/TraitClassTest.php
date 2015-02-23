<?php

class TraitClassTest extends PHPUnit_Framework_TestCase
{
    public function testConcreteMethod()
    {
        $mock = $this->getMockForTrait('Acme\AbstractTrait');

        $mock->expects($this->any())
             ->method('abstractMethod')
             ->will($this->returnValue(true));

        $this->assertTrue($mock->concreteMethod());
    }
}