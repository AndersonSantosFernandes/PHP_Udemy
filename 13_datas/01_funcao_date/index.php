
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
    <h1>Datas</h1>
    <div id="main">
    <?php

        $data = date('d/m/y');
        echo $data . "<br>";

        $data1 = date('d/M/y');
        echo $data1 . "<br>";
    
    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        Quando trabalhr com datas, procuras as diversas formas de aplicação 
        na documentação do PHP para implementação de 
        acordo as necessidades do projeto.
    </h2>
    </div>
    
</body>
</html>