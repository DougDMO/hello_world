<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad ->setNome("Douglas teste");
$cad ->setEmail("testedouglas@mailinator.com");
$cad->setSenha("123456");

$cad->registrarvenda();
