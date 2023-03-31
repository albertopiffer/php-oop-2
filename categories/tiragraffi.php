<?php
require_once __DIR__ . "/prodotto.php";

class Tiragraffi extends Prodotto {
    public $brand;
    public $altezza;
    public $peso;

    function __construct($_nome, $_id, $_tipologia, $_categoria, $_prezzo, $_brand, $_altezza, $_peso) {
        parent::__construct($_nome, $_id, 'Tiragraffi', 'Gatto', $_prezzo);
        
        $this->brand = $_brand;
        $this->altezza = $_altezza;
        $this->scadenza = $_scadenza;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getAltezza() {
        return $this->altezza;
    }

    public function getScadenza() {
        return $this->scadenza;
    }
}
