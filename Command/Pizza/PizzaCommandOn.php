<?php

include_once 'PizzaCommand.php';

class PizzaCommandOn extends PizzaCommand
{
    function execute()
    {
        $this->pizzaCommand->setStarsOn();
    }
}