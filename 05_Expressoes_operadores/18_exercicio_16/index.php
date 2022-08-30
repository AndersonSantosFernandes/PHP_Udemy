
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
        $cinco = 5;
        $tres = 3;
        $cincos = "5";

        if($cinco != $tres)
        {
            echo $cinco." é diferente de ".$tres." 1<br>";
        }

        if($cinco !== "5")
        {
            echo $cinco." é diferente de".$cincos." 2<br>";
        }

        if($cinco != $cincos)
        {
            echo $cinco." é diferente de ".$cincos." 3<br>";
        }

        if($cinco == $cincos)
        {
            echo $cinco." inteiro é igual a ".$cincos." string 4<br>";
        }

        if($cinco === $cincos)
        {
            echo $cinco." inteiro é identico a ".$cincos." string 4<br>";
        }
        else
        {
            echo $cinco." inteiro não é identico a ".$cincos." string 4<br>";
        }

    
    
    ?>
    </div>
    
</body>
</html>