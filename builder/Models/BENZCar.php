<?php


namespace bulder\Models;


class BENZCar extends Car
{

    private $data=[];

    /**
     * @param array $data
     */
    public function setPart($name,$value)
    {
        $this->data[$name] = $value;
    }
}