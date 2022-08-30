
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/principal.css">
    <title>Template exemplo</title>
    <style>

        :root{
            --shad: -10px 30px  2px green;
        }
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
    box-shadow: var(--shad);
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

        function soma($n1, $n2){
               return $n1 + $n2;  
        }
        $resultado = soma(4,4);
        echo $resultado . "<br>";

        $rest = soma($resultado, 33);
        echo $rest . "<br>";
    ?>
    <br><br><br>
    <center>
        <h2>
            explanação
        </h2>
    </center>
    </div>
    
</body>
</html>