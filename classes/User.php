<?php

class User
{
    protected $name;
    protected $lastName;
    protected $mail;
    protected $address;
    protected $accountType;
    public $cart = [];

    function __construct(string $name, string $lastName)
    {
        $this->setName($name);
        $this->setLastName($lastName);
    }

    /* GETTER E SETTER NAME */
    public function setName($newName)
    {
        if (is_null($newName)) {
            return;
        }
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    /* GETTER E SETTER LASTNAME */
    public function setLastName($newLastName)
    {
        if (is_null($newLastName)) {
            return;
        }
        $this->lastName = $newLastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    /* GETTER E SETTER MAIL */
    public function setMail($newMail)
    {
        if (is_null($newMail)) {
            return;
        }
        $this->mail = $newMail;
    }

    public function getMail()
    {
        return $this->mail;
    }

    /* GETTER E SETTER ADDRESS */
    public function setAddress($newAddress)
    {
        if (is_null($newAddress)) {
            return;
        }
        $this->address = $newAddress;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /* GETTER E SETTER CART*/
    /*     public function setCart($newCart)
    {
        if (is_null($newCart)) {
            return;
        }
        $this->cart = $newCart;
    }

    public function getCart()
    {

        return $this->cart;
    } */


    /*************/
    /* ACCOUNT TYPE */
    public function setAccountType($newAccountType)
    {
        if (is_null($newAccountType)) {
            return;
        }
        $this->accountType = $newAccountType;
    }

    public function getAccountType()
    {
        return $this->accountType;
    }
    /* FUNZIONI */

    public function getUserCompleteName()
    {
        return $this->name . " " . $this->lastName;
    }

    public function getUserCart()
    {
        return $this->cart["name"] . " " . $this->cart["prezzo"];
    }
}
