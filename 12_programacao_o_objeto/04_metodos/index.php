
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

        class Pessoa{

            function falar(){
                echo "My name is Anderson<br>";
            }
            function multiplicacao($a, $b){
                echo $a*$b ."<br>";

            }

        }
    $anderson = new Pessoa;
    $anderson->multiplicacao(7,8);
        $delzilane = new Pessoa;
    $anderson->falar();
    $delzilane->multiplicacao(6,6);

    
    ?>
     <br><br>
    
    <h2>
        explanação
    </h2>
    </div>
    
</body>
</html>