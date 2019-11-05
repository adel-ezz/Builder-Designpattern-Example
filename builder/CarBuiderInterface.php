<?php


namespace Bulder\builder;


use bulder\Models\Car;

Interface CarBuiderInterface
{
    public function createCar();

    public function addEngine();

    public function addDoors();

    public function addBody();

    public function addWeel();

    public function getCar() :Car;
}