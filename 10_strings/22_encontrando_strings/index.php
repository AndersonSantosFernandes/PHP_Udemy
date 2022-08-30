
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

       $str = "O rato roeu a roupa do rei de roma em roma e não em paris na frança";
       
       $encontrar = strpos($str, "rei");

       echo "$encontrar <br>";

       if($encontrar == null){
        echo "Não encontrada a palavra";

       }
       echo "<br>";
       var_dump($encontrar);
    
    ?>
    <br><br><br>
    <center>
        <h2>
        strpos($str, "frança"); <br>
        Função que retorna a posição da primeira letra da string informada ou um pecaço se for 
        colocado apenas parte da mesma. <br>
        Os resuktados possiveis para tratamento são false e true caso encontre ou não.
        </h2>
    </center>
    </div>
    
</body>
</html>