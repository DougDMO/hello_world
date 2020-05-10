<?php

$name = "imagens";

if(!is_dir($name)){

    mkdir($name);
    echo "Diretório criado: $name";
} else{

    rmdir($name);
    echo "Diretório existente: $name foi removido";
}

