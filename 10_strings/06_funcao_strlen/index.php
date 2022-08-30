
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

        $string1 = "Anderson Santos Fernandes";
        $string2 = "Anderson";

        echo "A string 1 tem " .strlen($string1) ." caracteres<br>";
        echo "A string 2 tem " .strlen($string2) ." caracteres<br>";
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            A função "strlen($string)" retorna o número de caracteres contidos em uma 
            string. Os espaços também são contado como string. <br>
            Podemos utilizar esta funçaõ para preenchimento de formulários onde só é aceito certo 
             número de caracteres 
        </h2>
    </center>
    </div>
    
</body>
</html>