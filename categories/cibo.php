<?php
require_once __DIR__ . "/prodotto.php";

class Cibo extends Prodotto {
    public $brand;
    public $gusto;
    public $peso;
    public $scadenza;

    function __construct($_nome, $_id, $_tipologia, $_categoria, $_prezzo, $_brand, $_gusto, $_peso, $_scadenza) {
        parent::__construct($_nome, $_id, 'Cibo', $_categoria, $_prezzo);
        
        $this->brand = $_brand;
        $this->gusto = $_gusto;
        $this->peso = $_peso;
        $this->scadenza = $_scadenza;
    }

    public function getBrand() {
        return $this->brand;
    }
    
    public function getGusto() {
        return $this->gusto;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getScadenza() {
        return $this->scadenza;
    }
}
