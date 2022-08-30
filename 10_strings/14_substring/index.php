
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

        $str = "esta é a minha string<br>";

        $minha = substr($str,10,5) . "<br>";

        print "$str <br>";

        echo $minha;

        $str2 = "Testando string novamente";
        echo "<br>";
        $sub2 = substr($str2,8);
        echo "$sub2 <br>";
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
           substr(1,2,3) <br>
           1- É a string <br>
           2- Pocição inicial da contagem <br>
           3- Limite final  da contagem (Caso seja colocado valor negativo, será subtraído do fim para o comeco.);
        </h2>
    </center>
    </div>
    
</body>
</html>