<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";
   

    $conexao = new mysqli($host, $user, $pass, $database);

   // Início do código
   $nome = "Michele";
   $sobrenome = "Pereira";

    $stmt = $conexao->prepare("INSERT INTO mano (nome, sobrenome) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $sobrenome);// s = string, i = integer, d= double

    $stmt->execute();

    $conexao->close();

   ?>