<?php

include_once 'Interface/ShapeFactory.php';
include_once 'Circle.php';
include_once 'Triangle.php';
include_once 'Rectangle.php';

$pos = new Position;

$shape = new ShapeFactory;

//Circle Factory
$pos->x = 100;
$pos->y = 20;

$circle = $shape->create("Circle", $pos);
echo "<pre>";
$circle->draw();

//Triangle Factory
$pos->x = 110;
$pos->y = 50;

$triangle = $shape->create("Triangle", $pos);
echo "<pre>";
$triangle->draw();

//Rectangle Factory
$pos->x = 34;
$pos->y = 55;

$rect = $shape->create("Rectangle", $pos);
echo "<pre>";
$rect->draw();
