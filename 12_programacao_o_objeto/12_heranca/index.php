
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
            public $idade = 43;
            public function falar(){
                echo "Olá  mundo! <br>";
            }
            private function gritar(){
                echo "EU GOSTO DE PHP <br>";
            }
            public function acessoGritar(){
                $this->gritar();
            }
            protected function falarBaixo(){
                echo "asdasdasdasdasd <br>";
            }
            public function acessaFalaBaixo(){
                $this->falarBaixo();
            }
        }
        class Programador extends Humano{
            public function acessaFalaBaixoProgramador(){
                $this->falarBaixo();
            }
        }
            $mano = new Humano;            
            $mano->falar();
            $mano->acessoGritar();
            $mano->acessaFalaBaixo();
            $ander = new Programador;
            echo $ander->idade . "<br>";
            $ander->falar();
            $ander->acessoGritar();
            $ander->acessaFalaBaixo();
    ?>
     <br><br>    
    <h2>
        explanação
    </h2>
    </div>    
</body>
</html>