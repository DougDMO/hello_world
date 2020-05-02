<?php

function ola($texto = "Mundo", $periodo = "Bom dia") {

    return "Olá $texto ! $periodo! <br>";

}

echo ola("","Boa Noite");
echo ola("Douglas", "Boa Tarde");
echo ola("","");