
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

        }
        class Animal{

        }
        class Professor extends Humano{

        }
    $anderson = new Humano;
    $bob = new Animal;
    $michele = new Professor;

    if($anderson instanceof Humano){
        echo "Anderson é um humano<br><hr>";
    }
    else
    {
        echo "Anderson não é um humano<br><hr>";
    }

    if($bob instanceof Humano){
        echo "Bob é um humano<br><hr>";
    }
    else
    {
        echo "Bob não é um humano<br><hr>";
    }

    if($michele instanceof Professor){
        echo "Michele é um/a professor/a<br><hr>";
    }
    else
    {
        echo "Michele não é um/a professor/a<br><hr>";
    }

    if($michele instanceof Humano){
        echo "Michele é um/a humano/a<br><hr>";
    }
    else
    {
        echo "Michele não é um/a humano/a<br><hr>";
    }
    if($bob instanceof Professor){
        echo "Bob é um professor<br><hr>";
    }
    else
    {
        echo "Bob não é um professor<br><hr>";
    }


    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        Com o "instanceof" é possivel verificar se uma classe está instanciada
        dirretamente ou se veio de alguma herança.Obs.: É retornado um booleano.
    </h2>
    <pre>
    if($bob instanceof Professor){
        echo "Bob é um professor";
    }
    else
    {
        echo "Bob não é um professor";
    } 
    </pre>
    </div>
    
</body>
</html>