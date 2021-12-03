<?php
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/../data/usersList.php";
class UserPremium extends User
{
    protected $discount = "0";

    function __construct($name,  $lastName)
    {
        parent::__construct($name, $lastName);
    }

    public function getDiscount()
    {
        if ($this->accountType == "Premium") {
            $this->discount = "10%";
        };
        return $this->discount;
    }
}
