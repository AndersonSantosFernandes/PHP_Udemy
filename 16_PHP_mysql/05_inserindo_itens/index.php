<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";


    $conexao = new mysqli($host, $user, $pass, $database);

    $table = "mano";
    $nome = "Anderson";
    $sobrenome = "Fernandes";

    $sql = "INSERT INTO $table (nome, sobrenome) VALUES ('$nome', '$sobrenome')";
    
    $conexao->query($sql);
   
    $conexao->close();
   ?>