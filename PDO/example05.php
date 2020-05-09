<?php


$conn = new PDO("sqlsrv:Database=banco_php;server=localhost\SQLEXPRESS;ConnectionPooling=0","php","master");

$stmt = $conn->prepare("DELETE FROM tb_usuarios where deslogin = :LOGINANTIGO");

$loginAntigo  = "doug_ALTERADO";

$stmt ->bindParam(":LOGINANTIGO",$loginAntigo);

$stmt ->execute();

$stmt = $conn->prepare("SELECT * from tb_usuarios");

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);