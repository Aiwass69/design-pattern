<?php


class NapolitanPizza extends Pizza
{
    public function __construct(string $bulkOfMass, string $ingredient, string $sauce)
    {
        parent::__construct($bulkOfMass, $ingredient, $sauce);
        return $this->getHawaian($sauce, $bulkOfMass, $ingredient);
    }

    public function getHawaian($sauce, $bulkOfMass, $ingredient){
        return "Napolitan with sauce". $sauce. "a bulk of edge". $bulkOfMass. "and". $ingredient;
    }
}