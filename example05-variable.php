<?php


function teste () {

    global $nome;
    $nome = "Douglas";

}

function teste2()  {

    global $nome;
    $nome = "Carlos";

}

teste();
//teste2();

echo $nome;