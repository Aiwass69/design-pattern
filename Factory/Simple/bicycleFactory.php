<?php


namespace Factory\Simple;


class bicycleFactory
{
    private $transport;

    public function __construct($transport_in)
    {
        $this->transport = $transport_in;
    }

    public function getNameTransport(){
        return $this->transport;
    }

    public function MadeBicycle() : Bicycle
    {
        if ($this->getNameTransport() != "Bicycle"){
            throw new Exception('No tenemos presupuesto, usa la bicicleta vago');
        }else{
            return new Bicycle;
        }
    }
}