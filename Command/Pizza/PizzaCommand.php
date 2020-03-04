<?php


abstract class PizzaCommand{
    protected $pizzaCommand;

    public function __construct($pizzaCommand_in){
        $this->pizzaCommand = $pizzaCommand_in;
    }

    abstract function execute();
}