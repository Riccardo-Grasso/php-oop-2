<?php
class Product
{
    protected $productName = "";
    protected $productPrice = "";


    function __construct(string $productName)
    {
        $this->setProductName($productName);
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
