<?php
namespace models;
include "goods_other_units.php";

class Items
{
    private $operationType;
    private $goodsName;
    private $goodsCode;
    private $measureUnit;
    private $unitPrice;
    private $currency;
    private $commodityCategoryId;
    private $description;
    private $stockPrewarning;
    private $haveExciseTax;
    private $havePieceUnit;
    private $pieceUnitPrice;
    private $pieceMeasureUnit;
    private $packageScaledValue;
    private $pieceScaledValue;
    private $exciseDutyCode;
    private $haveOtherUnit;
    private $goods_other_units = [];

    public function __construct(
        $operationType,
        $goodsName,
        $goodsCode,
        $measureUnit,
        $unitPrice,
        $currency,
        $commodityCategoryId,
        $description,
        $stockPrewarning,
        $haveExciseTax,
        $havePieceUnit,
        $pieceUnitPrice,
        $pieceMeasureUnit,
        $packageScaledValue,
        $pieceScaledValue,
        $exciseDutyCode,
        $haveOtherUnit
    )
    {
        $this->operationType = $operationType;
        $this->goodsName = $goodsName;
        $this->goodsCode = $goodsCode;
        $this->measureUnit = $measureUnit;
        $this->unitPrice = $unitPrice;
        $this->currency = $currency;
        $this->commodityCategoryId = $commodityCategoryId;
        $this->description = $description;
        $this->stockPrewarning = $stockPrewarning;
        $this->haveExciseTax = $haveExciseTax;
        $this->havePieceUnit = $havePieceUnit;
        $this->pieceUnitPrice = $pieceUnitPrice;
        $this->pieceMeasureUnit = $pieceMeasureUnit;
        $this->packageScaledValue = $packageScaledValue;
        $this->pieceScaledValue = $pieceScaledValue;
        $this->exciseDutyCode = $exciseDutyCode;
        $this->haveOtherUnit = $haveOtherUnit;
    }

    /**
     * @return mixed
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param mixed $operationType
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    /**
     * @return mixed
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param mixed $goodsName
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
    }

    /**
     * @return mixed
     */
    public function getGoodsCode()
    {
        return $this->goodsCode;
    }

    /**
     * @param mixed $goodsCode
     */
    public function setGoodsCode($goodsCode)
    {
        $this->goodsCode = $goodsCode;
    }

    /**
     * @return mixed
     */
    public function getMeasureUnit()
    {
        return $this->measureUnit;
    }

    /**
     * @param mixed $measureUnit
     */
    public function setMeasureUnit($measureUnit)
    {
        $this->measureUnit = $measureUnit;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getCommodityCategoryId()
    {
        return $this->commodityCategoryId;
    }

    /**
     * @param mixed $commodityCategoryId
     */
    public function setCommodityCategoryId($commodityCategoryId)
    {
        $this->commodityCategoryId = $commodityCategoryId;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStockPrewarning()
    {
        return $this->stockPrewarning;
    }

    /**
     * @param mixed $stockPrewarning
     */
    public function setStockPrewarning($stockPrewarning)
    {
        $this->stockPrewarning = $stockPrewarning;
    }

    /**
     * @return mixed
     */
    public function getHaveExciseTax()
    {
        return $this->haveExciseTax;
    }

    /**
     * @param mixed $haveExciseTax
     */
    public function setHaveExciseTax($haveExciseTax)
    {
        $this->haveExciseTax = $haveExciseTax;
    }

    /**
     * @return mixed
     */
    public function getHavePieceUnit()
    {
        return $this->havePieceUnit;
    }

    /**
     * @param mixed $havePieceUnit
     */
    public function setHavePieceUnit($havePieceUnit)
    {
        $this->havePieceUnit = $havePieceUnit;
    }

    /**
     * @return mixed
     */
    public function getPieceUnitPrice()
    {
        return $this->pieceUnitPrice;
    }

    /**
     * @param mixed $pieceUnitPrice
     */
    public function setPieceUnitPrice($pieceUnitPrice)
    {
        $this->pieceUnitPrice = $pieceUnitPrice;
    }

    /**
     * @return mixed
     */
    public function getPieceMeasureUnit()
    {
        return $this->pieceMeasureUnit;
    }

    /**
     * @param mixed $pieceMeasureUnit
     */
    public function setPieceMeasureUnit($pieceMeasureUnit)
    {
        $this->pieceMeasureUnit = $pieceMeasureUnit;
    }

    /**
     * @return mixed
     */
    public function getPackageScaledValue()
    {
        return $this->packageScaledValue;
    }

    /**
     * @param mixed $packageScaledValue
     */
    public function setPackageScaledValue($packageScaledValue)
    {
        $this->packageScaledValue = $packageScaledValue;
    }

    /**
     * @return mixed
     */
    public function getPieceScaledValue()
    {
        return $this->pieceScaledValue;
    }

    /**
     * @param mixed $pieceScaledValue
     */
    public function setPieceScaledValue($pieceScaledValue)
    {
        $this->pieceScaledValue = $pieceScaledValue;
    }

    /**
     * @return mixed
     */
    public function getExciseDutyCode()
    {
        return $this->exciseDutyCode;
    }

    /**
     * @param mixed $exciseDutyCode
     */
    public function setExciseDutyCode($exciseDutyCode)
    {
        $this->exciseDutyCode = $exciseDutyCode;
    }

    /**
     * @return mixed
     */
    public function getHaveOtherUnit()
    {
        return $this->haveOtherUnit;
    }

    /**
     * @param mixed $haveOtherUnit
     */
    public function setHaveOtherUnit($haveOtherUnit)
    {
        $this->haveOtherUnit = $haveOtherUnit;
    }

    /**
     * @return array
     */
    public function getGoodsOtherUnits()
    {
        return $this->goods_other_units;
    }

    /**
     * @param array $goods_other_units
     */
    public function addGoodsOtherUnits($goods_other_units)
    {
        $this->goods_other_units = $goods_other_units;
    }
    public function toArray() {
        return [
            'operationType' => $this->operationType,
            'goodsName' => $this->goodsName,
            'goodsCode' => $this->goodsCode,
            'measureUnit' => $this->measureUnit,
            'unitPrice' => $this->unitPrice,
            'currency' => $this->currency,
            'commodityCategoryId' => $this->commodityCategoryId,
            'description' => $this->description,
            'stockPrewarning' => $this->stockPrewarning,
            'haveExciseTax' => $this->haveExciseTax,
            'havePieceUnit' => $this->havePieceUnit,
            'pieceUnitPrice' => $this->pieceUnitPrice,
            'pieceMeasureUnit' => $this->pieceMeasureUnit,
            'packageScaledValue' => $this->packageScaledValue,
            'pieceScaledValue' => $this->pieceScaledValue,
            'exciseDutyCode' => $this->exciseDutyCode,
            'haveOtherUnit' => $this->haveOtherUnit,
        ];
    }

}