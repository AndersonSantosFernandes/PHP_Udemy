
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

    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;       
        function mostraConstante(){
            echo self::BRACOS . "<br>";     
        }
    }
    
    $anderson = new Humano; 

    echo $anderson::OLHOS . "<br>";
    $anderson->mostraConstante();

    

    ?>
     <br><br>
    
    <h2>
        O nome da constante e escrito todo em caixa alta <br>
        Não é declarada com sifrão <br>
        Para pegar o valor de uma constante através de um método dentro da classe 
        utilizamos a pavlavra reservada 'self'. <br>
        <pre>
        class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;       
        function mostraConstante(){
            echo self::BRACOS . "<br>";     
        }
    }
        </pre>

    </h2>
    </div>
    
</body>
</html>