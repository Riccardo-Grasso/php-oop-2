<?php

class PaymentMethods
{
    protected $name = "";

    function __construct($name)
    {
        $this->name = $name;
    }
}
