<?php

$nome = "Douglas Melo Oliveira";
$palavra = "as";

$q = strpos($nome,$palavra);

$texto = substr($nome,0,$q);

var_dump($texto);

$texto2 = substr($nome,$q+strlen($palavra),strlen($nome));

echo "<br>";

var_dump($texto2);

echo "<br>";

echo "$texto$palavra$texto2";