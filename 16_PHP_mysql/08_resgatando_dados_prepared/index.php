<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";
   

    $conexao = new mysqli($host, $user, $pass, $database);

   // Início do código
  $mensagem = null;
  $inicio = 10;
  $final = 900;
  if($inicio > $final){
    $mensagem = "O periodo inicial não pode ser maior do que o final!";

  }
  else
  {
    $stmt = $conexao->prepare("SELECT * FROM videos WHERE video_id between ? AND ?");

   $stmt->bind_param("ii", $inicio, $final);

    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    function inverter($data, $separa = "-", $junta = "/"){
        return implode($junta, array_reverse(explode($separa, $data)));
      }

   foreach($data as $item){
    echo $item[3] . "<br>vídeo com id ".$item[0] ." foi salvo no sistema no dia ". inverter($item[3]) . "<br><hr>";
   }

  }
   
    
    // print_r($data);
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    <?php
      echo $mensagem;
    ?>
   </body>
   </html>