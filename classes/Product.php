<?php
class Product
{
    protected $productTypology = "";
    protected $productName = "";
    protected $productPrice = "";


    function __construct($productName)
    {
        $this->setProductName($productName);
    }

    /* SETTER E GETTER PRODUCTYPOLOGY */
    public function setProductTypology($newProductTypology)
    {
        if (is_null($newProductTypology)) {
            return;
        }
        $this->productTypology = $newProductTypology;
    }

    public function getProductTypology()
    {
        return $this->productTypology;
    }


    /* SETTER E GETTER PRODUCTNAME */
    public function setProductName($newProductName)
    {
        if (is_null($newProductName)) {
            return;
        }
        $this->productName = $newProductName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /* SETTER E GETTER PRODUCTPRICE */
    public function setProductPrice($newProductPrice)
    {
        if (is_null($newProductPrice)) {
            return;
        }
        $this->productPrice = $newProductPrice;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }
}
