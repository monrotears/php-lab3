<?php

namespace App;

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Перенос точки по оси X
    public function moveX($dx)
    {
        $this->x += $dx;
    }

    // Перенос точки по оси Y
    public function moveY($dy)
    {
        $this->y += $dy;
    }

    // Перенос точки на вектор
    public function moveByVector(Vector $vector)
    {
        $this->x += $vector->getX();
        $this->y += $vector->getY();
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
        return "Point({$this->x}, {$this->y})";
    }
}
