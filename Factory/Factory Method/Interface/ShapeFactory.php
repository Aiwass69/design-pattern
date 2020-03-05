<?php


class ShapeFactory
{
    public function define_shape($class, $ingredients){
        return new $class($ingredients);
    }
}