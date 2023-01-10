<?php

class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($n) {
        $this->numero = $n;
    }
}

class Cpf extends Documento {
    public function validar(): bool {

        //VALIDAÇÃO DO CPF

        return true;

    }
}

$doc = new Cpf();

$doc->setNumero("14047795747");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>