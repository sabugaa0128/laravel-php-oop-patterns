<?php

namespace App\DesignPatterns\Creational\Pool;

class TaxoparkPool {
    private array $freetaxi = [];
    private array $busytaxi = [];

    public function getFreeTaxi() : array
    {
        return $this->freetaxi;
    }

    public function setFreeTaxi(array $freetaxi) : void
    {
        $this->freetaxi = $freetaxi;
    }

    public function getBusyTaxi() : array
    {
        return $this->busytaxi;
    }

    public function setBusyTaxi(array $busytaxi) : void
    {
        $this->busytaxi = $busytaxi;
    }

    public function getTaxi() : Taxi
    {
        if(count($this->freetaxi) === 0)
        {
            $taxi = new Taxi();
        }
        else
        {
            $taxi = array_pop($this->freetaxi);
        }

        $this->busytaxi[spl_object_hash($taxi)] = $taxi;

        return $taxi;
    }

    public function release(Taxi $taxi) : void
    {
        $key = spl_object_hash($taxi);

        if (isset($this->busytaxi[$key]))
        {
            unset($this->busytaxi[$key]);

            $this->freetaxi[$key] = $taxi;
        }
    }
}
