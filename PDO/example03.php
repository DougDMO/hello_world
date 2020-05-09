<?php


$conn = new PDO("sqlsrv:Database=banco_php;server=localhost\SQLEXPRESS;ConnectionPooling=0","php","master");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) values (:LOGIN,:PASSWORD)");

$login  = "doug_novo";
$password = md5("1234567");

$stmt ->bindParam(":LOGIN",$login);
$stmt ->bindParam(":PASSWORD",$password);

$stmt ->execute();

$stmt = $conn->prepare("SELECT * from tb_usuarios");

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);