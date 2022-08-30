
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

        function velMak($vel){
            echo "O carro chega a $vel por hora<br>";
        }

        velMak(200);
        velMak(300);
        velMak(400);
        velMak(500);
        velMak(600);


        $velFinal = 789;

        velMak($velFinal);
        velMak($velFinal , "teste");
        velMak("teste", $velFinal);

        function descricaoAnimal($raca, $nome){

            if(is_string($raca) && is_string($nome))
            {
                echo "O animal é da raça $raca e se chama $nome<br>";
            }
            else
            {
                echo "Nome só se escreve com letras, seu burro<br>";
            }
        }
        descricaoAnimal("Vira lata","baduque");
        descricaoAnimal("Vira lata",1978);
        descricaoAnimal(1978, "Vira lata");
    
    ?>
    <br><br><br>
    <center>
        <h2>
           Não executar uma funçaõ que exige parametro sem declará-lo na chamada <br>
           Podemos utilizar o valor do parametro em variáveis também
        </h2>
    </center>
    </div>
    
</body>
</html>