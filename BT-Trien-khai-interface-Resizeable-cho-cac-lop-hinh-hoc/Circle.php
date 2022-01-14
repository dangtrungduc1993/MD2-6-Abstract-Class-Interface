<?php
include_once "Resizeable.php";

class Circle implements Resizeable
{
    public float|int $radius;
    public function __construct(float|int $radius)
    {
        $this->radius = $radius;

    }


    public function resize($x)
    {
        return $this->radius = $this->radius + ($this->radius * ($x / 100));
    }
}