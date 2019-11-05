<?php


namespace Bulder\builder;


use bulder\Models\BENZCar;
use bulder\Models\Car;

class BenzCarBuilder implements CarBuiderInterface
{
    /**
     * @var Car $type
     *
     */
    private $type;
    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type=new BENZCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('Body','doors');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('Door','door');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('Engine','Engine');
    }

    public function addWeel()
    {
        // TODO: Implement addWeel() method.
        $this->type->setPart('Wheel','wheel');
    }

    public function getCar()
    {
        // TODO: Implement getCar() method.

    }
}