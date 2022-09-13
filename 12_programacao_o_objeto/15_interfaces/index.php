
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

        interface Caracteristicas{

            const nome = "Anderson";

            public function falar();
        }
        class Humano implements Caracteristicas{
            public $idade = 43;

            public function falar(){
                echo "Olá Mundo<br>";
            }

            public function falaNome(){
                echo "Meu nome é: " . self::nome . "<br>";
            }

        }
        
        $anderson = new Humano;
        $anderson->falar();
        $anderson->falaNome();
    
    ?>
     <br><br>
    
    <h2>
        Explanação <br>
        Herança = estender <br>
        Interface  = implementar <br>
    </h2>
    </div>
    
</body>
</html>