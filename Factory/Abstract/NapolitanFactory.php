<?php
include_once 'PizzaFactory.php';
include_once 'NapolitanPizza.php';
include_once 'Pizza.php';

class NapolitanFactory extends PizzaFactory
{
    public function createPizza($sauce, $ingredient, $bulkOfMass ): Pizza
    {
        if ($sauce == '' && $ingredient =='' &&$bulkOfMass == '') {
            throw new Exception("we don't do pizza invisible");
        }else{
            return new NapolitanPizza($bulkOfMass, $ingredient, $sauce);
        }
    }

}