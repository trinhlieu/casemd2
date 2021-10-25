<?php

namespace App\Model;

class Book
{
    private $bId;
    private $bName;
    private $bPrice;
    private $bCategory;
    private $bDescription;


    public function __construct($bId, $bName, $bPrice, $bCategory, $bDescription)
    {
        $this->bId = $bId;
        $this->bName = $bName;
        $this->bPrice = $bPrice;
        $this->bCategory = $bCategory;
        $this->bDescription = $bDescription;
    }

    /**
     * @return mixed
     */
    public function getBId()
    {
        return $this->bId;
    }

    /**
     * @param mixed $bId
     */
    public function setBId($bId)
    {
        $this->bId = $bId;
    }

    /**
     * @return mixed
     */
    public function getBName()
    {
        return $this->bName;
    }

    /**
     * @param mixed $bName
     */
    public function setBName($bName)
    {
        $this->bName = $bName;
    }

    /**
     * @return mixed
     */
    public function getBPrice()
    {
        return $this->bPrice;
    }

    /**
     * @param mixed $bPrice
     */
    public function setBPrice($bPrice)
    {
        $this->bPrice = $bPrice;
    }

    /**
     * @return mixed
     */
    public function getBCategory()
    {
        return $this->bCategory;
    }

    /**
     * @param mixed $bCategory
     */
    public function setBCategory($bCategory)
    {
        $this->bCategory = $bCategory;
    }

    /**
     * @return mixed
     */
    public function getBDescription()
    {
        return $this->bDescription;
    }

    /**
     * @param mixed $bDescription
     */
    public function setBDescription($bDescription)
    {
        $this->bDescription = $bDescription;
    }


}