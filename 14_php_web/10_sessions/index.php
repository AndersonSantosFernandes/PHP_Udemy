<?php

    session_start();
    $_SESSION['nome']= "Anderson";
    $msg = null;
    if(isset($_SESSION)){
        $msg = "tem alguem logado";
    }
    else
    {
        $msg = "Não tem ninguem logado";
    }
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/principal.css">
    <title>Template exemplo</title>
    <style>
        *{
    padding: 0;
    margin: 0;
}
body{
    background-image: linear-gradient(purple, gray, purple) ;
}
div#main{
    width: 500px;
    height: 400px;
    margin: auto;
    padding: 20px;
    background-color: azure;
}
h1{
    background-color: blue;
    color: azure;
    text-align: center;
}
    </style>
</head>
<body>
    <h1>Título</h1>
    <div id="main">
    <?php

        print_r($_SESSION);
        echo "<br>";
        $logado =  $_SESSION['nome'];
        print "Olá, seja bem vindo $logado!<br>";
        print $msg;   
    ?>


     <br><br>
    
    <h2>
        Explanação <hr>
        Para verifcar ou alteras o path de onde as sessions são salvas entramos no php myadmin,
        php ini com o comndo ctrl+f digitamos session.save.
        
    </h2>
    </div>
    
</body>
</html>