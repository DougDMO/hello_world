<?php

require_once "config.php";

/*
$sql = new Sql();

$usuarios = $sql->select("select* from tb_usuarios");

echo json_encode($usuarios);
*/

$usuario = new Usuario();

$usuario->loadbyId(13);

echo $usuario;
