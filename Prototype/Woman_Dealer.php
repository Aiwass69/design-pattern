<?php

include_once 'Dealer.php';
class Woman_Dealer extends Dealer
{

    public function __construct($name, $age, $yearsinacompany)
    {
        parent::__construct($name, $age, $yearsinacompany);
    }

    public function presentation(){
        return "I'm $this->name, the delivery woman in Raul's Pizza, have $this->age years old and have $this->yearsinacompany in this place";
    }
}