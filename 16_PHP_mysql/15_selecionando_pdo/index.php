<?php

$host = "localhost";
$db = "videos";
$user = "root";
$pass = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("SELECT * FROM mano WHERE id > :id");
$id = 1;
$stmt->bindParam(":id", $id);
$stmt->execute();

//$data = $stmt->fetch(PDO::FETCH_ASSOC); //USAMOS O COMANDO ENTRE PARENTESES PARA NÃO DUPLICAR OS RETORNOS.
//print_r($data);
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);
?>