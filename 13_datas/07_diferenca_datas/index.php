
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
    width: 900px;
    height: 600px;
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

       $dataA = new DateTime();
       $dataB = new DateTime();     
        $nome = "Anderson";
       $dataB->setDate(1978,10,18);

       print_r($dataA);
       echo "<br>";
       print_r($dataB);
       echo "<br>";


       $diferenca = $dataA->diff($dataB);
       
    //    print_r($diferenca);
       echo "<br>";

       echo $diferenca->format(" %y anos %m meses %d dias") . "<br>";
       
       foreach($diferenca as $chave=>$valor){
            echo $chave . " " . $valor . "<br>";
       }
       echo" $nome tem $diferenca->y ano/s $diferenca->m mes/es $diferenca->d dia/s $diferenca->h hora/s $diferenca->i minuto/s e $diferenca->s segundos <br>
       e está via há $diferenca->days dias<br><br>";

     
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        
    </h2>
    </div>
    
</body>
</html>