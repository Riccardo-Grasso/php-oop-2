<?php
require_once __DIR__ . "/PaymentMethods.php";
require_once __DIR__ . "/../traits/CardFormatter.php";

class CartaDiCredito extends PaymentMethods
{
    protected $numero = "";
    protected $scadenza = "";
    use CardFormatter;

    function __construct($numero, $scadenza)
    {
        parent::__construct("Carta di Credito");
        $this->numero = $this->cardFormatter($numero);
        $this->scadenza = $scadenza;
    }

    /*  public function RandomCardNumber()
    {
        return rand(000000000000, 999999999999);
    } */
}
