
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

    class Cachorro{
        public $pelo;
        public $cor;
        public $sexo;
    
        function __construct($nome, $pelo, $cor, $sexo){
            $this->nome = $nome;
            $this->pelo = $pelo;
            $this->cor = $cor;
            $this->sexo = $sexo;                      
        }

        public function exibirAnimal(){
            echo "$this->nome tem o pelo $this->pelo, $this->cor e é $this->sexo <br>";
    
        }
    }
    
    $rex = new Cachorro("Rex","liso", "branco", "macho" );
    $tobruc = new Cachorro("Tobruc","cacheado", "caramelo", "macho" );
    $nome = "Hadassa"; //Também popde ser inserido através de variáveis
    
    
    $mell = new Cachorro($nome,"espetado", "marrom", "femea" );

    $rex->exibirAnimal();
    $tobruc->exibirAnimal();
    $mell->exibirAnimal();



    ?>
     <br><br>
    
    <h2>
        explanação
    </h2>
    </div>
    
</body>
</html>