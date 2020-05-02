<?php

class Pessoa {

    public $nome; // Atributo

    public function falar(){ // Método

        return "O meu nome é " .$this->nome;

    }

}

$douglas = new Pessoa();
$douglas->nome="Douglas Melo";
echo $douglas->falar();