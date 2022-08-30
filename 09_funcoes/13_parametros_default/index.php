
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

        function teste($a = "Teste"){

            echo "O valor de A é: $a <br>";


        }

        echo teste();
        echo teste("Anderson <br><br>");

        function teste2($x , $y = 1978){
            
            echo "O parametro 1 é $x e o parametro 2 é $y<br><br>";

        }
        echo teste2(200);  
        echo teste2(200,300);
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            Quando usamos um valor default como parametro na função, mesmo que não passemos
            um parametro na chamada, ela executará o valor de default. Informando um parametro na 
            chamada, o mesmo será atribuido. OBS. é bom sempre colocar os defaults por ultimo 
            quando a função possuir mais de um parametro
        </h2>
    </center>
    </div>
    
</body>
</html>