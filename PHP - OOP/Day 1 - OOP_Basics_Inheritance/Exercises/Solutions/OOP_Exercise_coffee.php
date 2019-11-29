<?php

class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;

    public function __construct($volume, $brand, $temperature)
    {
        $this->volume = $volume;
        $this->brand = $brand;
        $this->temperature = $temperature;
        $this->quantity = $this->volume;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function sip($volume)
    {
        if($this->getQuantity() - $volume <= 0) {
            $sipQuantity = $this->getQuantity();
            $this->quantity = 0;
            echo 'You sipped ' . $sipQuantity . ' cl, there is no more coffee ! (You try to sip ' . $volume . ' cl)<br>';
        } else {
            $this->quantity = $this->getQuantity() - $volume;
            echo 'You sipped ' . $volume . ' cl, coffee left : ' . $this->getQuantity() ' cl<br>';
        }
    }
    
    public function refill()
    {
        $this->setQuantity($this->getVolume());
        echo 'Cup is full again<br>';
    }

    public function reHeat($temperature)
    {
        $this->temperature+=$temperature;
        echo 'Coffee warmed up at ' . $this->getTemperature() . '°C<br>';
    }

    public function coolDown($temperature)
    {
        $this->temperature-=$temperature;
        echo 'Coffee cooled down at ' . $this->getTemperature() . '°C<br>';
    }
}


$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, marque Malongo, 65 °C


while($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
    $quantityToSip = rand(1, 6);
    $myCoffee->sip($quantityToSip);
    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}
