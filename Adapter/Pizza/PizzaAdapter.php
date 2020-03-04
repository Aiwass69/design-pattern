<?php


class PizzaAdapter extends SimplePizza
{
    private $pizza;
    function __construct(SimplePizza $pizza_in){
       $this->pizza = $pizza_in;
    }

    public function getPizza(){
        if (is_array($this->pizza) || is_object($this->pizza)) {

            $pizzaIngredient = $this->pizza->getIngredient();
            $pizzaMass = $this->pizza->getMass();
            $pizzaSauce = $this->pizza->getSauce();

            return get_object_vars($pizzaIngredient)[0] . ' with ' . $pizzaMass . ' with ' . $pizzaSauce;
        }else{
            return $this->pizza->getIngredient() . ' with ' . $this->pizza->getMass() . ' with ' . $this->pizza->getSauce();
        }
    }
}