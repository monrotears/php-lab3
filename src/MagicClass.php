<?php

namespace App;

class MagicClass
{
    private $data = [];

    public function __construct()
    {
        echo "__construct called\n";
    }

    public function __destruct()
    {
        echo "__destruct called\n";
    }

    public function __get($name)
    {
        echo "__get called for property: $name\n";
        return isset($this->data[$name])
            ? $this->data[$name] : null;
    }

    public function __set($name, $value)
    {
        echo "__set called for property: $name\n";
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        echo "__isset called for property: $name\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "__unset called for property: $name\n";
        unset($this->data[$name]);
    }

    public function __call($name, $arguments)
    {
        echo "__call called for method: $name\n";
        return null;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic called for method: $name\n";
        return null;
    }

    public function __toString()
    {
        echo "__toString called\n";
        return "MagicClass object";
    }

    public function __invoke($param = null)
    {
        echo "__invoke called\n";
        return null;
    }

    public function __clone()
    {
        echo "__clone called\n";
    }

    public function __sleep()
    {
        echo "__sleep called\n";
        return ['data'];
    }

    public function __wakeup()
    {
        echo "__wakeup called\n";
    }
}
