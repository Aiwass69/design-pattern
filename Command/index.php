<?php


include_once 'Pizza/PizzaCommandExecute.php';

$name="yes";

writeln('');
writeln('BEGIN TESTING COMMAND PATTERN');
writeln('');


$pizza= new PizzaCommandExecute('Cheese, sausage ', ' a lot of sauce ', ' thin ', "$name");
writeln('Pizza after creation: ');
writeln($pizza->getPizza());
writeln(' ');

if ($name == "yes"){
    $pizzaOn = new PizzaCommandOn($pizza);
    CallCommandPizza($pizzaOn);
    writeln('after on');
    writeln($pizza->getPizza());
    writeln(' ');
}else{
    $pizzaOff = new PizzaCommandOff($pizza);
    CallCommandPizza($pizzaOff);
    writeln('after off');
    writeln($pizza->getPizza());
    writeln(' ');
}

writeln('END TESTING COMMAND PATTERN');



function callCommandPizza(PizzaCommand $pizzaCommand_in) {
    $pizzaCommand_in->execute();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}
