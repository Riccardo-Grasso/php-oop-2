<?php
require_once __DIR__ . "/PaymentMethods.php";

class CartaDiCredito extends PaymentMethods
{
    protected $numero = "";
    protected $scadenza = "";

    function __construct($numero, $scadenza)
    {
        parent::__construct("Carta di Credito");
        $this->numero = $numero;
        $this->scadenza = $scadenza;
    }

    /*  public function RandomCardNumber()
    {
        return rand(000000000000, 999999999999);
    } */
}
