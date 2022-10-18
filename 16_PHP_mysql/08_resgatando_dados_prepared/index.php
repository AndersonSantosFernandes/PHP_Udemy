<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";
   

    $conexao = new mysqli($host, $user, $pass, $database);

   // Início do código
  
   $inicio = 400;
    $final = 420;
    $stmt = $conexao->prepare("SELECT * FROM videos WHERE video_id between ? AND ?");

   $stmt->bind_param("ii", $inicio, $final);

    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    function inverter($data, $separa = "-", $junta = "/"){
        return implode($junta, array_reverse(explode($separa, $data)));
      }

   foreach($data as $item){
    echo $item[1] . "<br>vídeo com id ".$item[0] ." foi salvo no sistema no dia ". inverter($item[3]) . "<br>";
   }

    // print_r($data);
   ?>