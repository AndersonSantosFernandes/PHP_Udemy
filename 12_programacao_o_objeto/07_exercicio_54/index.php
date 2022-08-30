
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
    height: 500px;
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
            public $nome ;
            public $idade;
            function andar($metros){
                echo " e andou $metros metros";
            }
        }
        $asf = new Pessoa;
        
        $asf ->nome = "Anderson";
        $asf ->idade = 43;

        echo "A pessoa se chama $asf->nome, tem $asf->idade anos ";
        $asf->andar(200);
    ?>
     <br><br>
    
    <h4>
        A classe vem com a palavra especial class segudo do nome dela
         escrito em letra maiúscula <br>
         Uma propriedade é uma variável anteseguida de public ou private <br>
         Um método é uma função dentro da classe <br><br>

        <pre>
        class Pessoa{ (classe)
            public $nome = 'Anderson'; (propriedade)
            public $idade = 43; (propriedade)

            function andar($metros){ (método)
                echo " andou $metros metros e tem ";
            }
        }
        $asf = new Pessoa;
        echo $asf -> nome ;        
        $asf -> andar(333);
        echo $asf -> idade . " anos.";
        </pre>
    </h4>
    </div>
    
</body>
</html>