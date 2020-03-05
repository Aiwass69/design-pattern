<?php


class CirclePizza implements Pizza
{
    private $ingredients;

    public function __construct($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function cook()
    {
       echo "Cooking a Normal Pizza with {$this->ingredients}";
    }
}