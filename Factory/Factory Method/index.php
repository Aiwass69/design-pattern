<?php

include_once 'Interface/Pizza.php';
include_once 'Interface/ShapeFactory.php';
include_once 'CirclePizza.php';


$shape = new ShapeFactory();

$circle = $shape->define_shape('CirclePizza', 'Cheese');
$circle->cook();




