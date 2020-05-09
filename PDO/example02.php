<?php


$conn = new PDO("sqlsrv:Database=banco_php;server=localhost\SQLEXPRESS;ConnectionPooling=0","php","master");

$stmt = $conn->prepare("Select* from tb_usuarios ORDER BY deslogin");

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

sort($results);

echo json_encode($results);