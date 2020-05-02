<?php

$a = 10;

function trocavalor(&$b) {

    $b += 50;
    return $b;

}

echo trocavalor($a);
echo "<br>";
echo trocavalor($a);
echo "<br>";
echo $a;