<?php

class Rectangle
{

    public int $width;
    public int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float|int
    {
        return $this->width * $this->height;
    }

}