
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

       $vetor = [];

       for($i = 0; $i <=30; $i++){
            array_push($vetor, $i);
       }

    //    print_r($vetor);
    function arrayMaiorQueSete($array){
        $arrayRetorno = [];

        for($j = 0; $j < count($array); $j++){
            if($array[$j] > 7){
                array_push($arrayRetorno, $array[$j]);
            }
        }
        return $arrayRetorno;
    }

    $novoArray = arrayMaiorQueSete($vetor);

    print_r($novoArray);
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
           Para preencer um vetor vazio usamos o "array_push(parametro 1, parametro 2)"
           onde o primeiro é o nome do vetor e o segundo é a posição do incremento 
           gerado pelo laço for, e que também será o número salvo na pocição do array.
        </h2>
    </center>
    </div>
    
</body>
</html>