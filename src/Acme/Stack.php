<?php namespace Acme;

use InvalidArgumentException;

class Stack
{

    private $data;

    public function __construct($input = [])
    {
        $this->guardAgainstInvalidInput($input);
        $this->data = $input;
    }

    public function push($item)
    {
        array_push($this->data, $item);
    }

    public function pop()
    {
        return array_pop($this->data);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getCount()
    {
        return count($this->data);
    }

    private function guardAgainstInvalidInput($input)
    {
        if ($this->isNotArray($input)) {
            throw new InvalidArgumentException('Your data provided must be of type array.');
        }
    }

    private function isNotArray($input)
    {
        return !is_array($input);
    }

}