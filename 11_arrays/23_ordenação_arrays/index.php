
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

        $array = [3,66,44,99,11,6,9,12,1,41];

        // print_r($array);
        echo "<br>";

        foreach($array as $chave => $valor){
            echo $valor . " - ";
        }
        echo "<br>";
        sort($array);
        // print_r($array);
        echo "<br>";

        foreach($array as $chave => $valor){
            echo $valor . " - ";
        }
        echo "<br>";
        rsort($array);
        // print_r($array);
        
        echo "<br>";
        foreach($array as $chave => $valor){
            echo $valor . " - ";
        }

        $nomes = ['pamela', 'mariane','amandita','geoconda'];
        echo "<br>";
        sort($nomes);
        foreach($nomes as $chave1 => $valor1){
            echo $valor1 . " - ";
        }
    ?>
    <br><br><br>
    <center>
        <h2>
            Com as funções "sort()" e "rsort()" podemos ordenar os valores de um vetor tanto 
            crescente como decrescente. <br> Funciona também com strings.
        </h2>
    </center>
    </div>
    
</body>
</html>