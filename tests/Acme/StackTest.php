<?php

use Acme\Stack;

class StackTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function exampleStack()
    {
        $data = [
            'foo',
            'bar',
            'foobar',
        ];

        $stack = new Stack($data);

        $this->assertNotEmpty($stack->getData());

        return $stack;
    }

    /**
     * @depends exampleStack
     */
    public function testInitialArrayPopulation($stack)
    {
        $this->assertEquals(3, $stack->getCount());
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Your data provided must be of type array.
     */
    public function testConstructorIsPassedInvalidData()
    {
        $stack = new Stack("TEST");
    }

    public function testPush()
    {
        $stack = new Stack();

        $this->assertEquals(0, $stack->getCount());

        $stack->push('foo');
        $this->assertEquals(1, $stack->getCount());

        $stack->push('bar');
        $this->assertEquals(2, $stack->getCount());

        $stack->push('foobar');
        $this->assertEquals(3, $stack->getCount());

    }

    /**
     * @depends exampleStack
     */
    public function testPop($stack)
    {
        $value = $stack->pop();
        $this->assertEquals(2, $stack->getCount());
        $this->assertEquals('foobar', $value);

        $value = $stack->pop();
        $this->assertEquals(1, $stack->getCount());
        $this->assertEquals('bar', $value);

        $value = $stack->pop();
        $this->assertEquals(0, $stack->getCount());
        $this->assertEquals('foo', $value);
    }
}