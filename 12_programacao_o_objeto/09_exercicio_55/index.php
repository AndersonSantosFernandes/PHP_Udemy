
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
    width: 800px;
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
        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        function setVelocidade($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima deste carro é $this->velocidadeMaxima Km/h <br>";
        }
    }
        $bmw = new Carro;
        $ferrari = new Carro;
        $bmw->cor = "branca";
        $bmw->tetoSolar = true;
        $bmw->setVelocidade(200);
        $bmw->getVelocidadeMaxima();


        $ferrari->setVelocidade(300);
        $ferrari->getVelocidadeMaxima();
    
    ?>
     <br><br>
    
    <h2>
       <ol>
        <li>Crie uma classe carro</li><br>
        <li>Crie algumas propriedades e també a propriedade velocidade_maxima;</li><br>
        <li>Crie o métodoSetVelocidadeMaxima, onde é possivel alterar a getVelocidadeMaxima deo carro</li><br>
        <li>E também o getVelocidadeMaxima onde é possivel imprimira velocidade maxima do carro</li><br>
       </ol>
    </h2>
    </div>
    
</body>
</html>