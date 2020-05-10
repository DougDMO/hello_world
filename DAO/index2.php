<?php

require_once "config.php";

$url = 'http://www.fundamentus.com.br/resultado.php';


$conteudoSite = file_get_contents($url);

//echo $conteudoSite;

$DOM = new DOMDocument;
@$DOM->loadHTML($conteudoSite);
$XPath = new DomXPath($DOM);

$papel = "VVAR3";

for ($i=1;$i<=886;$i++) {
    $divs = $XPath->query('//*[@id="resultado"]/tbody/tr[' . $i . ']/td[1]/span/a');

    foreach ($divs as $div) {

        if ($div->nodeValue==$papel) {
            echo $div->nodeValue;
            echo '<br>';

            $pvps = $XPath->query('//*[@id="resultado"]/tbody/tr[' . $i . ']/td[4]');
            foreach ($pvps as $pvp) {
                echo $pvp->nodeValue;
            }

        }

    }
}