
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
Exercício 13
● Crie um arquivo PHP;
● Teste o operador de resto em duas divisões;
● Uma não exata e outra exata;
*/
    

    $a = 15;
    $b = 10;
    $c = 5;
    $d = 2;

    $modulo1 = $a % $b;
    $modulo2 = $b % $d;

    echo "O mod de ".$a." e ".$b." é ".$modulo1 . "<br>";
    echo "O mod de ".$b." e ".$d." é ".$modulo2 . "<br>";

    
    ?>
    </div>
    
</body>
</html>