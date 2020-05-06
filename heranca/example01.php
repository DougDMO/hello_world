<?php

class Documento {

    private $numero;

    public function getNumero() {

        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

}

class CPF extends Documento {

    public function validar():bool {
        $numerocpf = $this->getNumero();

        //VALIDAÇÃO DO CPF
        return true;
    }

}

$doc = new CPF();
$doc->setNumero("12345678901");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();