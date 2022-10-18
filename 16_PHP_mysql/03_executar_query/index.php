<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";


    $conexao = new mysqli($host, $user, $pass, $database);

   $sql = "SELECT * FROM usuarios";

   $result = $conexao->query($sql);

   print_r($result);
   
    $conexao->close();
   ?>