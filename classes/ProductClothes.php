<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../data/productData.php";

class ProductClothes extends Product
{
    protected $brand = "";
    protected $type = "";
    protected $size = "";

    function __construct($productTypology, $productName, $productPrice, $brand, $type, $size)
    {
        parent::__construct($this->setProductName($productName), $this->setProductTypology($productTypology), $this->setProductPrice($productPrice));
        $this->brand = $brand;
        $this->type = $type;
        $this->size = $size;
    }

    /*  setter e getter BRAND */
    public function setBrand($newBrand)
    {
        $this->brand = $newBrand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    /* setter e getter TYPE */
    public function setType($newType)
    {
        $this->type = $newType;
    }

    public function getType()
    {
        return $this->type;
    }

    /* setter e getter WARRANTY */
    public function setSize($newSize)
    {
        $this->size = $newSize;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getProductClothes()
    {
        return $this->productName . " " . $this->productPrice . "<br>";
    }
}
