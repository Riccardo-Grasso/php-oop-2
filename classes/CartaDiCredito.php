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

        /*         if (!is_numeric($numero)) {
            try {
                throw new Exception("Numero Carta di Credito non valido");
            } catch (Exception $e) {
                echo "Errore: " . $e->getMessage();
            }
        } */
        $this->numero = $this->cardFormatter($numero);
        $this->scadenza = $scadenza;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getScadenza()
    {
        return $this->scadenza;
    }
}
