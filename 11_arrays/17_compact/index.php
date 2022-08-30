
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

        $marca  = 'VW';
        $motor = "AP 1.6";
        $teto = true;
        $portas = 4;

        $carro = compact('marca','motor','teto','portas');

        print_r($carro);
        echo "<br>";

        foreach($carro as $chave => $valor){
            echo $chave ." " .$valor ."<br>";
        }
    
    ?>
    <br><br><br>
    <center>
        <h2>
            A função 'compact('marca','motor','teto','portas')' é 
            exatamente o inverso da extract.
            criando um array associativo através de variáveis.
        </h2>
    </center>
    </div>
    
</body>
</html>