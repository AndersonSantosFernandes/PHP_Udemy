
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

        $arr  = ['banana','maçã', 'batata', 'pera', 'mamão'];

        if(in_array('batata', $arr)){
            print "O item se encontra na lista";
        }
        else
        {
            print "O item não se encontra na lista";
        }
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            A função 'in_array('item', $array)' percorre o array e procura o valor informado;
            caso sim retorna true, do contrário false.
        </h2>
    </center>
    </div>
    
</body>
</html>