<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";
   

    $conexao = new mysqli($host, $user, $pass, $database);

   // Início do código
    $id = 500;
     $stmt = $conexao->prepare("SELECT nome, data_entrada FROM videos WHERE video_id = ?");

      $stmt->bind_param("i", $id);

      $stmt->execute();

      $result = $stmt->get_result();

      $item = $result->fetch_row();

      print_r($item);

      echo $item[0];

      $conexao->close();
   ?>