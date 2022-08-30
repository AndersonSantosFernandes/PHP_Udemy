
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
    echo"<h3>
    Operador de concatenação
● Em PHP podemos concatenar valores com . (ponto)
● Concatenar é o ato de juntar vários textos e/ou números em apenas 
uma string;
● Não há limites de quantas expressões podem ser concatenadas;

    </h3>";

    echo"testando a concatenação";
    echo"<br>";
    
    echo"testando"." a "."concatenação";
    echo"<br>";

    $a = "testando";
    $b = "concatenação";
    echo $a." a ".$b;
    echo"<br>";
    
    ?>
    </div>
    
</body>
</html>