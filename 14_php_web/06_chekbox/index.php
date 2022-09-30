
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

    $message = null;
    $valida = null;

    if(count($_POST) > 0){
        $coisas = $_POST['ingredientes'];
        // print_r($coisas);
        echo "<br>";
        $valida = true;
        

        $message = "Você selecionou: <br>";
       
    }
    else
    {
        $message = "Selecione ao menos um ítem";
    }
    
    

    
    
    ?>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate">Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alface">Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Cebola">Cebola
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alho">Alho
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Melão">Melão
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
     <br><br>
    
    <h2>
        Explanação <hr>
        
    </h2>
    <?php
            echo $message;
        if($valida == true){
            foreach($coisas as $prod){
                echo $prod . ", ";
            }
        } 
        
        
    ?>
    </div>
    
</body>
</html>