<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "trocaoleo";
   

    $conexao = new mysqli($host, $user, $pass, $database);

   // Início do código
    $id = 590;
    // $stmt = $conexao->prepare("UPDATE nomes set nome = ? WHERE id = ?");
     $stmt = $conexao->prepare("DELETE FROM nomes WHERE id = ?");
        //O bind_param no mysqli é um ponto de interrogação apenas como se fossem incognitas.
     $nome = "Reanimator";
      

      $stmt->bind_param("i", $id);

      $stmt->execute();

      if($stmt->error){  // com esta sentença podemos dar um amensagem de erro caso não saia como esperado.
        echo "Erro " . $stmt->error;
      }
      $conexao->close();
   ?>