<?php namespace Acme;

use Exception;

class SomeClass
{
    public function __construct()
    {
        // Default constructor
    }

    public function doSomething()
    {
        return 'Do Something Original Class';
    }

    public function doException()
    {
        throw new Exception('Intentional Exception');
    }

    public function getStackCount(Stack $stack)
    {
        return $stack->getCount();
    }
}