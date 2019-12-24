<?php


namespace Pusachev\ObjectManager\Test;


class TestDTO
{
    private $data;

    public function __construct(\SplFixedArray $fixarr, TestDTO $test, array $data = [])
    {
        $this->data = $data;
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}
