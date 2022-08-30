
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/principal.css">
    <title>Exercicio 11</title>
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
    <h1>Exercicio 11</h1>
    <div id="main">
    <?php

        $inicial = "5" * 12;

    echo $inicial . "<br>";

        echo gettype($inicial);
        echo "<br>";
        echo gettype([]);
        echo "<br>";
        echo gettype(15.6);
        echo "<br>";
        echo gettype("mano");
        echo "<br>";
        echo gettype(6);
        echo "<br>";
       
    ?>
    </div>
    
</body>
</html>