<?php


class Dealer
{   protected $age;
    protected $name;
    protected $yearsinacompany;
//    protected $genre;

    public function __construct($name, $age, $yearsinacompany)
    {
        $this->age = $age;
        $this->name = $name;
        $this->yearsinacompany = $yearsinacompany;
//        $this->genre = $genre;
    }

    public function greet(){
        return "I'm $this->name, have your pizza";
    }
}