<?php

$idade = 125;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idade < $idadeCrianca) {

    echo "Criança";

} elseif ($idade < $idadeMaior) {

    echo "Adolescente";

} elseif ($idade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "Idoso";

}

echo "<br>";

echo ($idade < $idadeMaior)?"Menor de idade":"Maior de idade";