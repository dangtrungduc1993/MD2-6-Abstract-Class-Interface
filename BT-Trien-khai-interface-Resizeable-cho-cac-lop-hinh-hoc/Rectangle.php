<?php

include_once "Resizeable.php";

class Rectangle implements Resizeable
{

    public int $width;
    public int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function resize($x)
    {
        $this->width = $this->width + ($this->width * ($x / 100));
        $this->height = $this->height + ($this->height * ($x / 100));
        return $this->width . " , " . $this->height;
    }
}