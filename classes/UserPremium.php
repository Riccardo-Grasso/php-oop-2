<?php
require_once __DIR__ . "/User.php";

class UserPremium extends User
{
    protected $dateOfSubscription;
    protected $discount = "10%";
    protected $cashback = "1%";
    protected $accountType = "premium";
}
