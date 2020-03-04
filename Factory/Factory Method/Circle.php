<?php

class Circle implements Shape{
    private $position;

    public function __construct(Position $pos) {
        $this->position = $pos;
    }

    public function draw(){
        echo "Drawing a circle with position (".$this->position->x .",".$this->position->y.")<br/>";
    }
}
