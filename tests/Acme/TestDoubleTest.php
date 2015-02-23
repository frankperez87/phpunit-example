<?php

use Acme\SomeClass;

class TestDoubleTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        $stub = $this->getMockBuilder('Acme\SomeClass')
            ->disableOriginalConstructor()
            // ->setMethods(null) // No methods are overridden by default.
            ->getMock();

        $stub->method('doSomething')
            ->will($this->returnValue('foo'));

        $this->assertEquals('foo', $stub->doSomething());
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Intentional Exception
     */
    public function testThrowExceptionStub()
    {
        $stub = $this->getMockBuilder('Acme\SomeClass')
            ->getMock();

        $stub->method('doException')
            ->will($this->throwException(new \Exception('Intentional Exception')));

        $stub->doException();
    }

    public function testMock()
    {
        $stack = $this->getMockBuilder('Acme\Stack')
            ->disableOriginalConstructor()
            ->getMock();

        $stack->expects($this->once())
            ->method('getCount')
            ->will($this->returnValue(3));

        $someClass = new SomeClass();
        $this->assertEquals(3, $someClass->getStackCount($stack));
    }

    public function testMockWithProphecy()
    {
        $stack = $this->prophesize('Acme\Stack');

        $stack->getCount()->shouldBeCalled();
        $stack->getCount()->willReturn(3);

        $someClass = new SomeClass();
        $this->assertEquals(3, $someClass->getStackCount($stack->reveal()));
    }
}