<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../data/productData.php";

class ProductTech extends Product
{
    protected $brand = "";
    protected $type = "";
    protected $warranty = "";


    function __construct($productTypology, $productName, $productPrice, $brand, $type, $warranty)
    {
        parent::__construct($this->setProductName($productName), $this->setProductTypology($productTypology), $this->setProductPrice($productPrice));
        $this->brand = $brand;
        $this->type = $type;
        $this->warranty = $warranty;
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
    public function setWarranty($newWarranty)
    {
        $this->warranty = $newWarranty;
    }

    public function getWarranty()
    {
        return $this->warranty;
    }

    public function getProductTech()
    {
        return  $this->productName . " " . $this->productPrice . "<br>";
    }
}
