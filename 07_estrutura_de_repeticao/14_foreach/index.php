
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

        $array = [14,23,34,43,50,67,78,85,94,79];
        $cont = 0;
        foreach ($array as $chave){
            $cont = $cont+1;
            if($chave % 2 != 0){
                echo "<br>";
                echo $chave . " - ";
                echo $cont . " asd - ";
            }
            else
            {
                echo $chave . " - ";
                echo $cont . " asd - ";
            }
           
        } 
    
    
    ?>
      <br><br><br>
    <center>
        <h2>
            
        $array = [1,2,3,4,5,6,7,8,9,0]; <br>

foreach ($array as $chave){ <br>
    echo $chave ; <br>
} 
        </h2>
    </center>
    </div>
    
</body>
</html>