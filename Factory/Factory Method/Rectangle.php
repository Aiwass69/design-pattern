<?php

class Rectangle implements Shape{
    private $position;

    public function __construct(Position $pos) {
        $this->position = $pos;
    }

    public function draw(){
        echo "Drawing a rectangle with position (".$this->position->x .",".$this->position->y.")<br/>";
    }
}