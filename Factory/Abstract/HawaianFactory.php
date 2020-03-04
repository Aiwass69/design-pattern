<?php

include_once 'PizzaFactory.php';
include_once 'HawaianPizza.php';
include_once 'Pizza.php';

class HawaianFactory extends PizzaFactory
{

    public function createPizza($sauce='',$ingredient='', $bulkOfMass=''): Pizza
    {
        if ($sauce == '' && $ingredient =='' &&$bulkOfMass == '') {
            throw new Exception("we don't do pizza invisible");
        }else{
            return new HawaianPizza($sauce, $bulkOfMass, $ingredient);
        }
    }
}