<?php
include_once "Square.php";
include_once "Rectangle.php";
include_once "Circle.php";

$shapes[0] = new Square(10);
$shapes[1] = new Rectangle(10,5);
$shapes[2] = new Circle(10);
foreach ($shapes as $shape ){
    if ($shape instanceof Square){
        echo $shape->howToColor() . '<br>';
    }else{
        echo $shape->getArea().'<br>';
    }

}