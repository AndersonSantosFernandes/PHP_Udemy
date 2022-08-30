
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
        $str = "Teste ";
        $repetindo = str_repeat($str, 7);   
        echo $repetindo;
        echo "<br>";
        $frase = "Anderson Santos Fernandes<br>";
        $repetindo1 = str_repeat($frase, 7);   
        echo $repetindo1;
        echo "<br>";    
    ?>
    <br><br><br>
    <center>
        <h2>
        str_repeat($str, 7) <br>
        Primeiro parametro a string <br>
        Segundo parametro número de repetições.
        </h2>
    </center>
    </div>    
</body>
</html>