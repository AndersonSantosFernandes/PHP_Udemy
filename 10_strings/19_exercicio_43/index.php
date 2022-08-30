
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

}
    </style>
</head>
<body>
    <h1>Título</h1>
    <div id="main">
    <?php


    $transportes = "carro - navio - helicoptero - barco - jangada";

    $arrTransp = explode("-", $transportes );

    for($i = 0; $i < count($arrTransp); $i++){
        echo $arrTransp[$i] . "<br>";
    }

    ?>
    <br><br><br>
    <center>
        <h2>
        $transportes = "carro - navio - helicoptero - barco - jangada"; <br>

$arrTransp = explode("-", $transportes ); <br>

for($i = 0; $i < count($arrTransp); $i++){ <br>

    echo $arrTransp[$i] ; <br>
}
        </h2>
    </center>
    </div>
    
</body>
</html>