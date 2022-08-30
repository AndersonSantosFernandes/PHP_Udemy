
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

        $a = 10;
        $b = 15;

        function testeEscopo(){
            $a = 5;

            global $b;

            static $c = 0;

            $a++;
            $b++;
            $c++;

            echo "Escopo local de a: $a <br>";
            echo "Escopo global na função de B: $b <br>";
            echo "Escopo static de c: $c <br>";
        }
            echo "Ecopo global de a: $a <br>";
            echo "Escopo global de B: $b <br>";
           

            testeEscopo();

            echo "Escopo global de b 2: $b<br>";
       

            testeEscopo();
    
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