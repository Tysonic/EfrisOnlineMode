<?php

namespace models;

class GoodsOtherUnits
{
    private $other_unit;
    private $other_price;
    private $other_scaled;
    private $package_scaled;

    public  function __construct($other_price,$other_scaled,$other_unit,$package_scaled)
    {
        $this->other_unit = $other_unit;
        $this->other_price = $other_price;
        $this->other_scaled = $other_scaled;
        $this->package_scaled = $package_scaled;
    }
    /**
     * @return mixed
     */
    public function getOtherUnit()
    {
        return $this->other_unit;
    }

    /**
     * @param mixed $other_unit
     */
    public function setOtherUnit($other_unit)
    {
        $this->other_unit = $other_unit;
    }

    /**
     * @return mixed
     */
    public function getOtherPrice()
    {
        return $this->other_price;
    }

    /**
     * @param mixed $other_price
     */
    public function setOtherPrice($other_price)
    {
        $this->other_price = $other_price;
    }

    /**
     * @return mixed
     */
    public function getOtherScaled()
    {
        return $this->other_scaled;
    }

    /**
     * @param mixed $other_scaled
     */
    public function setOtherScaled($other_scaled)
    {
        $this->other_scaled = $other_scaled;
    }

    /**
     * @return mixed
     */
    public function getPackageScaled()
    {
        return $this->package_scaled;
    }

    /**
     * @param mixed $package_scaled
     */
    public function setPackageScaled($package_scaled)
    {
        $this->package_scaled = $package_scaled;
    }


}