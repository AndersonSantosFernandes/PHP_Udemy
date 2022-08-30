
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

    function soma($a, $b){
        print_r(func_get_args());
        echo "<br>";

        print func_num_args() . "<br>";
        return $a+$b;

    }
    soma(1978,2010);
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            'func_get_args()' retorna oos valores dos argumentos da função em um array <br>
            'func_num_args()' retorna o número de argumentos da função.
        </h2>
    </center>
    </div>
    
</body>
</html>