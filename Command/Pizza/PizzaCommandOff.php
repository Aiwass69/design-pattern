<?php

include_once 'PizzaCommand.php';

class PizzaCommandOff extends PizzaCommand
{
    function execute()
    {
        $this->pizzaCommand->setStarsOff();
    }
}