<?php

include_once "Rectangle.php";
include_once "Circle.php";
include_once "Square.php";

$shapes[0] = new Square(10);
$shapes[1] = new Rectangle(10,5);
$shapes[3] = new Circle(10);

foreach ($shapes as $shape){
    echo $shape->resize(rand(1,100)) . '<br>';
}

