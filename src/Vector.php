<?php

namespace App;

class Vector
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Длина вектора
    public function getLength()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    // Проверка на нулевой вектор
    public function isZero()
    {
        return abs($this->x) < 0.000000001
            && abs($this->y) < 0.000000001;
    }

    // Проверка перпендикулярности
    public function isPerpendicularTo(Vector $other)
    {
        $dotProduct = $this->x * $other->x
                    + $this->y * $other->y;

        return abs($dotProduct) < 0.000000001;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function __toString()
    {
        return "Vector({$this->x}, {$this->y})";
    }
}
