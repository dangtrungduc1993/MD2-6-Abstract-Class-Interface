<?php

class Circle
{
    public float|int $radius;
    public function __construct(float|int $radius)
    {
        $this->radius = $radius;

    }

    public function getArea()
    {
        return pi() * $this->radius**2;

    }

}