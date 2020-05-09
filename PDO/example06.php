<?php


$conn = new PDO("sqlsrv:Database=banco_php;server=localhost\SQLEXPRESS;ConnectionPooling=0","php","master");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios where deslogin = ?");

$loginAntigo  = "doug_novo";

$stmt ->execute(array($loginAntigo));

$conn->rollBack();

$stmt = $conn->prepare("SELECT * from tb_usuarios");

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);