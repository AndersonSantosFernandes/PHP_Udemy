
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

        $a = (int) "testando";
        $b = (int) 12.5;
        $c = (int) true;
        $d = (int) [2,3,5];

        if(is_int($a))
        {
            echo $a." Inteiro 1<br>";
        }
        if(is_int($b))
        {
            echo $b." Inteiro 2<br>";
        }
        if(is_int($c))
        {
            echo $c." Inteiro 3<br>";
        }
        if(is_int($d))
        {
            echo $d ." Inteiro 4<br>";
        }
    
    
    ?>
    </div>
    
</body>
</html>