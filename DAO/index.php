<?php

require_once "config.php";

/*
$sql = new Sql();

$usuarios = $sql->select("select* from tb_usuarios");

echo json_encode($usuarios);
*/

//<<<<<<<<Carrega 1 usuários>>>>>>>>
//$usuario = new Usuario();
//$usuario->loadbyId(13);
//echo $usuario;

//<<<<<<Carrega uma lista de usuários>>>>>>>>

//$lista = Usuario::getList();
//echo json_encode($lista);

//<<<<<Carrega uma lista de usuários pelo login>>>>>>>>>

//$search = Usuario::search("novo");
//echo json_encode($search);

//<<<<<Autentica um usuário>>>>>>>>>>

//$autentica = new Usuario();
//$autentica->login("sql_160","123456");
//echo $autentica;

// <<<<<<Inserir um usuário>>>>>>>>>

//$aluno = new Usuario("usuario" . rand(1,1000),"123456");
//$aluno->insert();
//echo $aluno;

//Atualizar login e senha

//$usuario = new Usuario();
//$usuario->loadbyId(8);
//$usuario->update("Professor_teste","2323232");
//echo $usuario;

//Deletar um usuário

$usuario = new Usuario();
$usuario->loadbyId(27);
echo $usuario . "<br>";
$usuario->delete();
echo $usuario;