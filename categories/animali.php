<?php

class Animale {
    private $categoria;
    private $id;


function __construct($_categoria, $_id) {
    $this->categoria = $_categoria;
    $this->id = $_id;
}

public function getCategoria() {
    return $this->categoria;
}

public function getId() {
    return $this->id;
}

// private function setId($prefix) {
//     $this->id = uniqid($prefix . "_");
// }

}
