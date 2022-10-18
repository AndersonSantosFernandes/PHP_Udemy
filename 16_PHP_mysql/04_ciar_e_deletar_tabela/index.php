<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";


    $conexao = new mysqli($host, $user, $pass, $database);

    $acao = 3;

    if ($acao == 1){
        $sql = "CREATE TABLE mano (nome VARCHAR(50), sobrenome VARCHAR(50))";
        
   $result = $conexao->query($sql);
    }
    elseif($acao == 2){
        $sql = "DROP TABLE mano";
        
   $result = $conexao->query($sql); 
    }
    else {
        echo "Nada foi feito";
    }

   

   
    $conexao->close();
   ?>