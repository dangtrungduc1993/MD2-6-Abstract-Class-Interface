<?php

include_once "Resizeable.php";


class Square implements Resizeable

{
    public $wight;

    public function __construct($wight)
    {
        $this->wight = $wight;
    }


    public function resize($x)
    {
        return $this->wight = $this->wight + ($this->wight * ($x / 100));
    }
}