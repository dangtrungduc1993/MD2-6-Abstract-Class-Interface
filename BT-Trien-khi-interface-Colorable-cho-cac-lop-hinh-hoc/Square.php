<?php
include_once "Colorable.php";

class Square implements Colorable
{
    public $wight;

    public function __construct($wight)
    {
        $this->wight = $wight;
    }

    public function getArea()
    {
        return $this->wight**2;
    }


    public function howToColor()
    {
        return "Color all four sides";
    }
}