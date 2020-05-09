<?php


$conn = new PDO("sqlsrv:Database=banco_php;server=localhost\SQLEXPRESS;ConnectionPooling=0","php","master");

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where deslogin = :LOGINANTIGO");

$loginAntigo  = "doug_novo";
$login  = "doug_novo_ALTERADO";
$password = md5("000000AAAAAA");

$stmt ->bindParam(":LOGIN",$login);
$stmt ->bindParam(":PASSWORD",$password);
$stmt ->bindParam(":LOGINANTIGO",$loginAntigo);

$stmt ->execute();

$stmt = $conn->prepare("SELECT * from tb_usuarios");

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);