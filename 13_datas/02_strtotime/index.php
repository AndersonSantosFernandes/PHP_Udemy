
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

    $cincodias = strtotime("5 days");
    echo $cincodias . "<br>";

    $dezdias = strtotime("10 days");
    echo $dezdias . "<br>";

    $nascimento = strtotime("-45 years");
    $nasc2 = date('d/m/Y', $nascimento);

    echo $nascimento . "<br>";
    
    $dataMais5 = date('d/m/y', $cincodias);
    echo $dataMais5 ."<br>";

    $dataMais10 = date('d/m/y', $dezdias);
    echo $dataMais10 ."<br>";
    echo $nasc2 ."<br>";
    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        Ver a aula novamente função strtotime().

    </h2>
    </div>
    
</body>
</html>