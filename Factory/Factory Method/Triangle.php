<?php


class Triangle implements Shape
{
    private $position;

    public function __construct(Position $pos)
    {
        $this->position = $pos;
    }

    public function draw()
    {
        echo "Drawing a triangle with position (" . $this->position->x . "," . $this->position->y . ")<br/>";
    }
}