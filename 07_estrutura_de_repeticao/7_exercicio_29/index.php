
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
        $contador = 0;
        $vetor = [10,20,30,40,50,60,70,80,90,100];
        $tamanho = count($vetor);
        
        
        while($contador < $tamanho)
        {

            if($vetor[$contador] == 50 || $vetor[$contador] == 20 ){
                //echo "Pulou o número $vetor[$contador] <br>";
                $contador++;    
                continue;
            }

            if($vetor[$contador] == 90)
            {
               echo"Prou no $vetor[$contador]<br>";
                break;
            }

            echo"$vetor[$contador] <br> ";
            $contador++;
        }
    
    
    ?>
    </div>
    
</body>
</html>