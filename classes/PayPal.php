<?php
require_once __DIR__ . "/PaymentMethods.php";

class PayPal extends PaymentMethods
{
    protected $id = "";

    function __construct($id)
    {
        parent::__construct("PayPal");
        $this->id = $id;
    }

    /*  public function RandomCardNumber()
    {
        return rand(000000000000, 999999999999);
    } */
}
