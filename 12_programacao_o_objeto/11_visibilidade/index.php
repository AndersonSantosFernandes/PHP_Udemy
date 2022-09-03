
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

        class Car{
            public $rodas = 4;
        }

        class Mecanico{

            public function alterando($carro){
                $carro->rodas = 10;
            }

            public function colocaPelicula($carro, $pelicula){
                $carro->vidro = $pelicula;
            }
        }
    
    
        $carro = new Car;

        echo $carro->rodas . "<br>";
        $anderson = new Mecanico;

        $anderson->alterando($carro);

        echo $carro->rodas . "<br>"; 

        $anderson->colocaPelicula($carro, "G20");
        echo $carro->vidro . "<br>"; 
    ?>
     <br><br>
    
    <h2>
        Visibilidade <br>
        public, protected e private <br>
    </h2>
    </div>
    
</body>
</html>