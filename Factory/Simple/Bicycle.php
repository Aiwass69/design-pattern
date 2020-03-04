<?php

namespace Factory\Simple;
use Factory\Simple\bicycleFactory;


class Bicycle
{   private $destination;

    public function DriveTo(string $drive_to=''){
        if ($drive_to != 'Paris'){
            return false;
        }

        return $this->destination = $drive_to;


    }

}