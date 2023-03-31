<?php

class Prodotto {
    private $nome;
    private $id;
    private $categoria;
    private $prezzo;

function __construct($_categoria, $_id) {
    $this->nome = $_nome;
    $this->id = $_id;
    $this->categoria = $_categoria;
    $this->prezzo = $_prezzo;
}

public function getNome() {
    return $this->nome;
}

public function getId() {
    return $this->id;
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
