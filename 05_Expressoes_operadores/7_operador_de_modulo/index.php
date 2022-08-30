
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

            /*
            Operador de módulo
            ● O operador de módulo é inserido no código pelo símbolo de %
            ● Sua função é realizar uma divisão;
            ● Mas como resultado ele apresenta apenas o resto da mesma;
            */
    
            echo 12 % 2;
            Echo" modulo<br>";

            echo 12 / 2;
            Echo" divisao<br>";

            echo 13 % 5;
            Echo" modulo<br>";

            echo 13 / 5;
            Echo" divisao<br>";
    
    ?>
    </div>
    
</body>
</html>