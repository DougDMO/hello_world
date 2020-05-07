<?php

$conn = new mysqli("localhost","root","","banco_php");

if($conn->connect_error){

    echo "Erro: " . $conn->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values(?,?)");

$var1 = "user";
$str = "12345";

$stmt->bind_param("ss", $var1, $str);

$stmt->execute();

$var1 = "root";
$str = "123456";

$stmt->execute();