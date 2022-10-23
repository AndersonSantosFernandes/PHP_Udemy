<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "trocaoleo";
   

    $conexao = new mysqli($host, $user, $pass, $database);

   // Início do código
    $id = 4;
     $stmt = $conexao->prepare("UPDATE nomes set nome = ? WHERE id = ?");
        //O bind_param no mysqli é um ponto de interrogação apenas como se fossem incognitas.
     $nome = "Cristiely";
      

      $stmt->bind_param("si", $nome, $id);

      $stmt->execute();

      if($stmt->error){  // com esta sentença podemos dar um amensagem de erro caso não saia como esperado.
        echo "Erro " . $stmt->error;
      }
      $conexao->close();
   ?>