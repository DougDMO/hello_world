<?php


$conn = new PDO("mysql:dbname=banco_php;host=localhost","root","");

$stmt = $conn->prepare("Select* from tb_usuarios ORDER BY deslogin");

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
sort($results);

foreach ($results as $row){
    foreach ($row as $key => $value) {

        echo "<strong>" . $key . ": </strong>" . $value . "<br>";
        
    }
    echo "=====================================<br>";
}

var_dump($results);