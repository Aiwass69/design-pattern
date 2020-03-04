<?php

include_once 'Pizza/SimplePizza.php';
include_once 'Pizza/PizzaAdapter.php';


writeln('BEGIN TESTING ADAPTER PATTERN');
writeln('');



$pizza = new SimplePizza((object)['sausage, chicken, pez'], "thick mass", "and a lot of sauce");

$pizzaAdapter = new PizzaAdapter($pizza);
writeln('A pizza with '. $pizzaAdapter->getPizza());
//var_dump($pizza);die()
//;var_dump($pizzaAdapter);die();


writeln('');

writeln('END TESTING ADAPTER PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}

