
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
        $asd = mktime(strtotime("0 days"));
        $nascimento = mktime(11,25,15,10,18,1978);
        echo $nascimento . "<br>";
        $formatada = date('d/m/Y h:m:s', $asd);
        echo $formatada. "<br>";

    
    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        "mktime(01,18,00,03,12,2000);" assim podemos criar uma data especifica 
        em uma variável que irá gerar um timestamp depois exibi-la formatada com o date: <br>
        date('d/m/y' , variável vinda do mktime); 
    </h2>
    </div>
    
</body>
</html>