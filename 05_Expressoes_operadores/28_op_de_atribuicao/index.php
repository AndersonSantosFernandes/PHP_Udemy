
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
        operadores de atribuição <br><br>
    <?php

        $a = 0;
        $a += 10;

        echo $a . "<br>";

        $b = 0;
        $b -= 10;

        echo $b . "<br>";

        $c = 5;
        $c *= 10;

        echo $c . "<br>";

        $d = 10;
        $d /= 5;

        echo $d . "<br>";
    
    
    ?>
    </div>
    
</body>
</html>