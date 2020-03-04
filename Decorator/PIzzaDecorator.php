<?php

include 'Pizza.php';

class PIzzaDecorator extends Pizza{
    protected $pizza;

    public function __construct(Pizza $pizza_in)
    {
        $this->pizza = $pizza_in;
        $this->resetPrice();
    }

    function resetPrice(){
        $this->pizza->getPrice();
    }

    function showPizza(){
        return $this->pizza->getBill();
    }

    function showPriceDeco(){
        return $this->pizza->getPrice();
    }

    function showPizzaDeco(){
         return $this->pizza->getPrice();
    }

}

