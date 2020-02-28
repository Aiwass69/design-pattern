<?php

include_once 'carFactory.php';
include_once 'cars.php';

function writeln($line_in) {
    echo $line_in."<br/>";
}

writeln('START TESTING FACTORY METHOD PATTERN');
writeln('');

writeln('Testing car_Sedan ');
$sedan = carFactory::build('sedan');
writeln('');
echo "<img src='https://www.motor.com.co/files/article_main/files/crop/uploads/2019/05/10/5cd5e8d0da7c4.r_1557523442498.41-153-761-513.jpeg' style='width: 500px'/>";
writeln('');
writeln('');

writeln('Testing car_Suv ');
$suv = carFactory::build('suv');
writeln('');
echo "<img src='https://motor.elpais.com/wp-content/uploads/2018/12/20.-peugeot-3008-1800x728.jpg' style='width: 500px'/>";
writeln('');

$mazda = carFactory::build('mazda');

writeln('');
writeln('END TESTING FACTORY METHOD PATTERN');