<?php

$host = "localhost";
$db = "videos";
$user = "root";
$pass = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("UPDATE mano SET nome = :nome, sobrenome = :sobrenome WHERE id = :id");

$id = 1;
$nome = "Anderson";
$sobrenome = "Santos";

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->execute();

?>