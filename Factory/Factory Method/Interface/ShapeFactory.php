<?php

interface Shape{
    public function draw();
}

class Position{
    public $x;
    public $y;
}

class ShapeFactory{
    public function create($class, $position)
    {
        return new $class($position);
    }
}
