<?php


namespace Bulder\builder;


use bulder\Models\Car;

class CarProducer
{
    private $Builder;

    public function __construct(CarBuiderInterface $buider)
    {
        $this->Builder = $buider;
    }
    public function ProduceCar() :Car
    {

        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addDoors();
        $this->Builder->addEngine();
        return $this->Builder->getCar();
    }
}