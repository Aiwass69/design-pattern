<?php

use Factory\Simple\bicycleFactory;

include_once 'Bicycle.php';

include_once 'bicycleFactory.php';
include_once 'Bicycle.php';

function writeln($line_in) {
    echo $line_in."<br/>";
}

writeln('My test');
$factory = new bicycleFactory('Bicycle');
$transport = $factory->MadeBicycle();
$destination = $transport->DriveTo('La Luna');


if ($destination != false){
    echo "¿Pizza a Paris?, claro el repartidor ira en bicicleta hasta su casa";
}else{
    echo "¿A donde? No, por allá no ira el repartidor. No ve que va en bicicleta";
}

writeln(' ');
writeln('My test');



