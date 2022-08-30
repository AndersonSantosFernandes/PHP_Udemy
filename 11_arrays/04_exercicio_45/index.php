
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
    width: 600px;
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

        $vetor = range(10, 45);

        foreach($vetor as $valor){
            $valor = $valor + 6;
            if($valor > 30){
                echo "O valor " . $valor ." é maior que 30 <br> ";
            }
            else
            {
                echo $valor ." - ";    
            }
            
        }
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
          Exercício 45  
        </h2>
    </center>
    </div>
    
</body>
</html>