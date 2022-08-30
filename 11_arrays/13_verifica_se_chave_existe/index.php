
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

        $arr = [
            'nome'=>'Anderson',
            'idade'> 43

        ];
    if(array_key_exists('nome', $arr)){
        print "O indice existe <br>";
    }
    else
    {
        print "O nome não existe <br>";
    }
    if(array_key_exists('sexo', $arr)){
        print "O indice existe <br>";
    }
    else
    {
        print "O nome não existe <br>";
    }

    if(isset($arr['teste'])){
        print "O indice existe ISSET<br>";
    }
    else
    {
        print "O indice não existe ISSET<br>";
    }
    if(isset($arr['nome'])){
        print "O indice existe ISSET<br>";
    }
    else
    {
        print "O indice não existe ISSET<br>";
    }
    
    ?>
    <br><br><br>
    <center>
        <h2>
            explanação <br>
            if(array_key_exists('nome', $arr)){
            print "O indice existe";
            } <br>
            'if(isset($arr['nome']))' O isset també serve para verificar a existencia de uma variável declarada no código.
        </h2>
    </center>
    </div>
    
</body>
</html>