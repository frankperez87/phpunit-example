<?php

class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'bar';
    }

    public function testExpectFooBarActualFooBar()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}