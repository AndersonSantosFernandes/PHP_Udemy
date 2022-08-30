


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/principal.css">
    <title>Exercicio 10</title>
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
    <h1>Exercicio 10</h1>
    <div id="main">
    <?php

        /*
Crie um arquivo PHP;
● Crie uma operação que utiliza subtração ( - ), divisão ( / ) e multiplicação
● Armazene todos os valores em variáveis;
● Imprima o resultado final na tela;
*/
$resultado = 0;

$valor1 = 15;
$valor2 = 20;
$valor3 = 6;



$calcula = $valor1 + $valor2 / $valor3;

$resultado = $calcula;

echo"O valor do cálculo é: $resultado";
    
    
    ?>
    </div>
    
</body>
</html>