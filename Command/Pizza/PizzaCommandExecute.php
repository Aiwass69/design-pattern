<?php

include_once 'PizzaCommand.php';
include_once 'PizzaCommandOff.php';
include_once 'PizzaCommandOn.php';

class PizzaCommandExecute{
    private $ingredient;
    private $bulkOfMass;
    private $sauce;
    private $extraCheese ;

    public function __construct($ingredient_in, $sauce_in, $bulkOfMass_in, $cheese_in)
    {
        $this->setIngredient($ingredient_in);
        $this->setSauce($sauce_in);
        $this->setMass($bulkOfMass_in);
        $this->setChees($cheese_in);
    }

    function setIngredient($ingredient_in){
        $this->ingredient = $ingredient_in;
    }

    function setSauce($sauce_in){
        $this->sauce= $sauce_in;
    }

    function setMass($bulkOfMass_in){
        $this->bulkOfMass = $bulkOfMass_in;
    }

    function setChees($cheese_in){
        $this->extraCheese = $cheese_in;
    }

    function getIngredient(){
        return $this->ingredient;
    }

    function getSauce(){
        return $this->sauce;
    }

    function getMass(){
        return $this->bulkOfMass;
    }

    function getCheese(){
        return $this->extraCheese;
    }

    function setStarsOn() {
        $this->setChees(Str_replace('yes','cheese for you, men',$this->getCheese()));
    }

    function setStarsOff() {
        $this->setChees(Str_replace('no','you miss the promo',$this->getCheese()));
    }

    function getPizza(){
        return $this->getIngredient().'Bulk'.$this->getMass().'Amount of'.$this->getSauce().'More chees, for you?   '.$this->getCheese();
    }
}