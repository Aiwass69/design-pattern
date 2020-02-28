<?php

include_once 'carFactory.php';
include_once 'cars.php';

// Creating new Sedan
$sedan = carFactory::build('sedan');
echo "<br>";
echo "<img src='https://www.motor.com.co/files/article_main/files/crop/uploads/2019/05/10/5cd5e8d0da7c4.r_1557523442498.41-153-761-513.jpeg' style='width: 500px'/>";
echo "<br>";
// Creating new SUV
$suv = carFactory::build('suv');
echo "<br>";
echo "<img src='https://motor.elpais.com/wp-content/uploads/2018/12/20.-peugeot-3008-1800x728.jpg' style='width: 500px'/>";
echo "<br>";

$mazda = carFactory::build('mazda');