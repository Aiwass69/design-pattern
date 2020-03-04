<?php


include_once 'PIzzaDecorator.php';

writeln('BEGIN TESTING DECORATOR PATTERN');

$pizza = new Pizza('Napolitana ', ' Personal ', ' $50.0');

$decorator = new PIzzaDecorator($pizza);


writeln('Algo');
writeln($decorator->showPizza());
writeln('Fin de esta cosa');
writeln('');

writeln('Algo 3');
writeln("!".$decorator->showPizzaDeco()."¡");
writeln('fin de este algo 33');
writeln('');

writeln('Algo 2');
writeln("*".$decorator->showPriceDeco()."*");
writeln('fin de este algo 2');



function writeln($line_in) {
    echo $line_in."<br/>";
}
