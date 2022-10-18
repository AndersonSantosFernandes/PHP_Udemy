<?php
    $host = "localhost";
    $user = "root";
    $pass = "s";
    $database = "videos";


    $conexao = new mysqli($host, $user, $pass, $database);

    if($conexao->connect_errno){ // funçãoverificadora de erro na conexão.
        echo "Errou su burro<br>";
        echo "Erro: " . mysqli_connect_error() ."<br>"; //Recebe a descrição do erro e imprime concatenado através do echo.
        echo "Erro: " . $conexao->connect_error; //Mesmo comando que o de cimas mas orientado a objeto.
    }
    else
    {
        echo "Acertou <br>";
        
    }

   ?>