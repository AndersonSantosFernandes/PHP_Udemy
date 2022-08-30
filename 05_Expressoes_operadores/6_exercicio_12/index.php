
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
    Exercício 12
● Crie um arquivo PHP;
● Crie uma operação com cada um dos operadores básicos;
● Cada operação deve estar em uma variável diferente;
● Imprima cada uma das etapas;
● Ex: soma -> multiplicação -> divisão -> subtração;
    */
    $num1 = 50;
    $num2 = 10;

    $soma = $num1 + $num2;
    $subt = $num1 - $num2;
    $divi = $num1 / $num2;
    $mult = $num1 * $num2;

    echo "A soma entre ". $num1 . " e " . $num2 . " é: " . $soma . "<br>";
    echo "A subtração entre ". $num1 . " e " . $num2 . " é: " . $subt . "<br>";
    echo "A divisão entre ". $num1 . " e " . $num2 . " é: " . $divi . "<br>";
    echo "A multiplicação entre ". $num1 . " e " . $num2 . " é: " . $mult . "<br>";

    
    
    ?>
    </div>
    
</body>
</html>