<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "videos";
   

    $conexao = new mysqli($host, $user, $pass, $database);

    $sql = "SELECT * FROM  usuarios";
   $result = $conexao->query($sql);

//    $item = $result->fetch_assoc();

   $items = $result->fetch_all();
   
    // foreach($item as $dado){
    //     echo $dado ."<br>";
    // }
        function inverter($data, $separa = "-", $junta = "/"){
          return implode($junta, array_reverse(explode($separa, $data)));
        }

    foreach($items as $dados){
        echo $dados[1] ."<br>".
        $dados[2] ."<br>".
        $dados[3] ."<br>".
        $dados[4] ."<br>".
        inverter($dados[7])   ."<br><hr>"
        ;
    }

//    print_r($items);
//    echo "<br>";
    $conexao->close();
   ?>