<?php

class SimplePizza{

    private $ingredient;
    private $bulkOfMass;
    private $sauce;

    public function __construct($ingredient_in, $mass_in, $sauce_in)
    {
        $this->ingredient = $ingredient_in;
        $this->bulkOfMass = $mass_in;
        $this->sauce = $sauce_in;
    }

    public function getIngredient(){
        return $this->ingredient;
    }

    public function getMass(){
        return $this->bulkOfMass;
    }

    public function getSauce(){
        return $this->sauce;
    }
}