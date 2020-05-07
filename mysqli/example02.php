<?php

$conn = new mysqli("localhost","root","","banco_php");

if($conn->connect_error){

    echo "Erro: " . $conn->connect_error;
    exit;
}

$result = $conn->query("Select * from tb_usuarios order by deslogin");
$data = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)){

    array_push($data,$row);
    var_dump($row);

}

sort($data);
echo json_encode($data);