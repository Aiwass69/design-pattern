<?php

include_once 'Woman_Dealer.php';
include_once 'Men_Dealer.php';


$delivery = new Woman_Dealer('Sasha', '20', '4');

echo $delivery->greet();
echo ('<BR> ');
echo $delivery->presentation();
echo ('<BR> ');

/*------------ // --------------*/
$delivery2 = new Men_Dealer('Ron', '18', '1');
echo ('<BR> ');
echo $delivery2->greet();
echo ('<BR> ');
echo $delivery2->presentation();