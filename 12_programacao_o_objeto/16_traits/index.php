
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
        trait Objeto{
            public function teste(){
               echo "Testando traits com PHP<br>"; 
            }
        }
        trait Testando{
            public $y = 1000;
            public function traitTeste(){
                echo "Este método é da trit testando<br>";
            }
        }
        class Central{
            use Objeto;
            use Testando;
        }
        $x = new Central;
        $x->teste();
        $x->traitTeste();
        echo $x->y;
    
    
    ?>
     <br><br>
    
    <h2>
        Explanação <br>
        As trait servem para organizar mais o código principalmente para não
        ter muita herança de classe. <br>
        Criamos uma trait, e a chamamos dentro da classe com a palavra reservada 'use'
        seguido do nome da trait.
    </h2>
    </div>
    
</body>
</html>