<?php

$anoNascimento=1993;

//Teste comentário linha
$nome="Douglas";
$sobrenome="Oliveira";

$nomeCompleto=$nome.' '.$sobrenome;

echo $nomeCompleto;

/*
 * Teste comentário 1
 * Teste comentário 2
 */

unset($nomeCompleto);

if(isset($nomeCompleto)){
    echo $nomeCompleto;
}