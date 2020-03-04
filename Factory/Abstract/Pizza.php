<?php


abstract class Pizza
{
    private $bulkOfMass;
    private $ingredient;
    private $sauce;

    public function __construct(string $bulkOfMass, string $ingredient, string $sauce)
    {
        $this->ingredient = $ingredient;
        $this->bulkOfMass = $bulkOfMass;
        $this->sauce = $sauce;
    }
}