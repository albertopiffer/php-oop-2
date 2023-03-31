<?php

class Prodotto {
    private $nome;
    private $id;
    private $tipologia;
    private $categoria; //cane/gatto
    private $prezzo;

function __construct($_nome, $_id, $_tipologia, $_categoria, $_prezzo) {
    $this->nome = $_nome;
    $this->id = $_id;
    $this->tipologia = $_tipologia;
    $this->categoria = $_categoria;
    $this->prezzo = $_prezzo;
}

public function getNome() {
    return $this->nome;
}

public function getId() {
    return $this->id;
}

public function getTipologia() {
    return $this->tipologia;
}

public function getCategoria() {
    return $this->categoria;
}

public function getPrezzo() {
    return $this->prezzo;
}

// private function setId($prefix) {
//     $this->id = uniqid($prefix . "_");
// }

}
