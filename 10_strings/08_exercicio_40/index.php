
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
        $string = "O rato roeu a roupa do rei de roma";
        $contador = 0;
        for($i = 0; $i < strlen($string); $i++){
            if($string[$i] == "a"){
                echo $string[$i];
                $contador = $contador + 1;
            }           
        }
        echo "<br>", $contador;      
    ?>
    <br><br><br>
    <center>
        <h2>
            Utilizando a função strlen($string) juntamente com um laço for podemos escolher quais letras e quantas
            estão presentes na string .
        </h2>
    </center>
    </div>    
</body>
</html>