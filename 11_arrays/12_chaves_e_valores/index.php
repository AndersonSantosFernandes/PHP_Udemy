
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
            'carro'=> 'parati',
            'teto solar'=> true,
            'ano'=>1999,
            'modelo' => 'perua'
        ];

        print_r(array_keys($arr));
        echo "<br>";
        print_r(array_values($arr));
        echo "<br>";
    
    
    ?>
    <br><br><br>
    <center>
        <h2>

        array_keys($arr) retorna as chaves do array <br>
        
        array_values($arr) retorna os valores do array.
        </h2>
    </center>
    </div>
    
</body>
</html>