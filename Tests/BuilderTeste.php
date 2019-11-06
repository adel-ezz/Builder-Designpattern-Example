<?php


namespace Tests;


use Bulder\builder\BenzCarBuilder;
use Bulder\builder\BMWCarBuilder;
use Bulder\builder\CarProducer;
use bulder\Models\BENZCar;
use bulder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTeste extends TestCase
{
    public function testProduceBMWCar(){
        $BMWBuilder=new BMWCarBuilder();
        $carProducer=new CarProducer($BMWBuilder);
        $mycar= $carProducer->ProduceCar();
        $this->assertInstanceOf(BMWCar::class,$mycar);
    }

    public function testProduceBENZCar(){
        $BMWBuilder=new BenzCarBuilder();
        $carProducer=new CarProducer($BMWBuilder);
        $mycar= $carProducer->ProduceCar();
        $this->assertInstanceOf(BENZCar::class,$mycar);
    }
}