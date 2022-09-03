
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

        class Carro{

            public $vidros = "Degrade";

            public function trocarPneu(){
                echo "Já está na hora de trocar os pneus <br>";
            }
            private function trocarOleo(){
                echo "Já está na hora de trocar o oleo <br>";
            }

            public function acessoOleo(){
                $this->trocarOleo();
            }

        }

        class Mecanico extends Carro{

            public $trocando = "Sabe trocar qualquer coisa<br>";
            public function trocador(){
               Echo "O mecanico $this->trocando <br>";
            }
      
        }

        $proprietario = new Carro;
        $mecanico = new Mecanico;
        echo $proprietario->acessoOleo();
        echo $mecanico->vidros ."<br>";;
        $mecanico->trocarPneu();
        echo $mecanico->acessoOleo();

        echo $mecanico->trocando;
        $mecanico->trocador();

    
    ?>
     <br><br>
    
    <h2>
        explanação
    </h2>
    </div>
    
</body>
</html>