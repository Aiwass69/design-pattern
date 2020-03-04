<?php


abstract class PizzaFactory
{
    abstract public function createPizza( $bulkOfMass, $ingredient, $sauce): Pizza;

}