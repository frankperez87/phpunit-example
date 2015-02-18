<?php

use Acme\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    private $fizzbuzz;

    public function setUp()
    {
        $this->fizzbuzz = new FizzBuzz();
    }

    public function fizzBuzzDataProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'fizz'],
            [4, 4],
            [5, 'buzz'],
            [9, 'fizz'],
            [15, 'fizzbuzz'],
            [123, 'fizz'],
        ];
    }

    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function testFizzBuzz($input, $expected)
    {
        $response = $this->fizzbuzz->execute($input);
        $this->assertEquals($expected, $response);
    }

    public function testItTranslatesASequenceForFizzBuzz()
    {
        $result = $this->fizzbuzz->executeUpTo(10);
        $this->assertEquals([1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz'], $result);
    }

}
