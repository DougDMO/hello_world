<?php

$name = "Douglas";
$site = 'www.google.com.br';
$ano = 1993;
$salario = 5098.34;
$bloqueado = false;

/////////////////////////////

$frutas = array("abacaxi","laranja", "manga", "maçã");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);


/////////////////////////////

$arquivos = fopen("example03-types.php","r");

//var_dump($arquivos);

$nulo = null;
$vazio="";

var_dump($nulo);
var_dump($vazio);

