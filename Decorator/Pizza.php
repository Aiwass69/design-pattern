<?php


class Pizza
{
    private $pizzaName;
    private $size;
    private $pizzaPrice;

    public function __construct($pizzaName_in, $size_in, $pizzaPrice_in)
    {
        $this->setPizzaName($pizzaName_in);
        $this->setSize($size_in);
        $this->setPizzaPrice($pizzaPrice_in);
    }

    function setPizzaName($pizzaName_in){
        $this->pizzaName = $pizzaName_in;
    }

    function setSize($size_in){
        $this->size = $size_in;
    }

    function setPizzaPrice($pizzaPrice_in){
        $this->pizzaPrice = $pizzaPrice_in;
    }

    function getPizzaName(){
        return $this->pizzaName;
    }

    function getSize(){
        return $this->size;
    }

    function getPrice(){
        return $this->pizzaPrice;
    }

    function getBill(){
        return  $this->getPizzaName(). $this->getSize().  'by'. $this->getPrice();
    }
}