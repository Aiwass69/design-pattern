<?php

include_once 'Pizza.php';
class HawaianPizza extends Pizza
{
    public function __construct(string $bulkOfMass, string $ingredient, string $sauce)
    {
        parent::__construct($bulkOfMass, $ingredient, $sauce);
    }
}