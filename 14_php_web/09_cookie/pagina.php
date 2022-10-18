
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/principal.css">
    <title>Cookie</title>
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

       

        if(isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
        }
        print_r($_COOKIE);
        //var_dump($nome);
    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        Acessou a segunda página burrão.
        
    </h2>
    <?php    if($nome != ""):   ?>

        <p>Seja bem vindo <?= $nome ?> voce está na segunda páina</p>

    <?php    endif;   ?>
    <a href="index.php">Início  </a>
    </div>
    
</body>
</html>