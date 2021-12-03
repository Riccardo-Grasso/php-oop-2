<?php

class User
{
    protected $name;
    protected $lastName;
    protected $mail;
    protected $address;
    protected $accountType = "basic";
    protected $cart = [];

    function __construct(string $name, string $lastName)
    {
        $this->setName($name);
        $this->setLastName($lastName);
    }

    /* GETTER E SETTER NAME */
    protected function setName($newName)
    {
        if (is_null($newName)) {
            return;
        }
        $this->name = $newName;
    }

    protected function getName()
    {
        return $this->name;
    }

    /* GETTER E SETTER LASTNAME */
    protected function setLastName($newLastName)
    {
        if (is_null($newLastName)) {
            return;
        }
        $this->lastName = $newLastName;
    }

    protected function getLastName()
    {
        return $this->lastName;
    }

    /* GETTER E SETTER MAIL */
    protected function setMail($newMail)
    {
        if (is_null($newMail)) {
            return;
        }
        $this->mail = $newMail;
    }

    protected function getMail()
    {
        return $this->mail;
    }

    /* GETTER E SETTER ADDRESS */
    protected function setAddress($newAddress)
    {
        if (is_null($newAddress)) {
            return;
        }
        $this->address = $newAddress;
    }

    protected function getAddress()
    {
        return $this->address;
    }

    /* FUNZIONI */

    public function getUserCompleteName()
    {
        return $this->name . " " . $this->lastName;
    }
}
