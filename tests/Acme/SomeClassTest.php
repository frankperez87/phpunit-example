<?php
class SomeClassTest extends PHPUnit_Framework_TestCase {

    public function testDoSomething()
    {
        $someClass = new Acme\SomeClass;
        $this->assertEquals('Do Something Original Class', $someClass->doSomething());
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Intentional Exception
     */
    public function testDoException()
    {
        $someClass = new Acme\SomeClass;
        $someClass->doException();
    }
}