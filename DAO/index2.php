<?php

require_once "config.php";

$url = 'http://www.fundamentus.com.br/resultado.php';


$conteudoSite = file_get_contents($url);

//echo $conteudoSite;

$DOM = new DOMDocument;
@$DOM->loadHTML($conteudoSite);
$XPath = new DomXPath($DOM);

$papeis = array();
$linha = array();

$headers = array();

for ($j = 1; $j <= 21; $j++) {

    $titulo = $XPath->query('//*[@id="resultado"]/thead/tr/th[' . $j . ']/a');

    foreach ($titulo as $tit) {

        $headers[$j] = $tit->nodeValue;

    }
}

for ($i = 1; $i <= 886; $i++) {
    for ($c = 1; $c <= 21; $c++) {

        $divs = $XPath->query('//*[@id="resultado"]/tbody/tr[' . $i . ']/td[' . $c . ']');

        foreach ($divs as $div) {

            $linha[$headers[$c]] = [$div->nodeValue];

        }
    }
    array_push($papeis, $linha);
}

echo json_encode($papeis);