<?php

include_once 'HawaianFactory.php';
include_once 'NapolitanFactory.php';

function writeln($line_in) {
    echo $line_in."<br/>";
}

$factory = new HawaianFactory();
$hawaian = $factory->createPizza('Sweet', 'Pineapple', 'thin');
echo "Your Hawaian is already <br>";
echo "<img  src='https://globalnatural.es/wp-content/uploads/pizza-hawaiian-2.jpg' width='200px' height='200'/><br><br>";

$factory = new NapolitanFactory();
$napolitan = $factory->createPizza('Passata de tomate', 'Mozzarella fresca, Albahaca fresca, Orégano seco', 'thick');
echo "Your Napolitan is already <br>";
echo "<img  src='https://i.blogs.es/d3a175/pizza-napolitana-margarita/1366_2000.jpg' width='200px' height='200'/>";