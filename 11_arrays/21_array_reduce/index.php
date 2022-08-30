
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
        $arr = [1,2,3,4,5];

        function soma($a, $b){
            return $a + $b;
        }

        $resultado = array_reduce($arr, "soma");
        echo $resultado . "<br>";



    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            'array_reduce($arr, "soma");' <br>
            O array_reduce serve para transformar os elementos de um array em um só.
            O primeiro parametro é o array e o segundo é o nome da função escrita em forma de string.
        </h2>
    </center>
    </div>
    
</body>
</html>