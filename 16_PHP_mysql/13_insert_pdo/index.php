<?php

$host = "localhost";
$db = "videos";
$user = "root";
$pass = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO mano (nome, sobrenome) VALUES (:nome, :sobrenome) ");

$nome = "Itaiane";
$sobrenome = "Princesinha";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->execute();

?>