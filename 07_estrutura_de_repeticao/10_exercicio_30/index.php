
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
    /*Criar um vetor de 0 a 20 e criar um laço for onde devem ser impressos apenas 
    os números pares */

        $vetor = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        
       

        for($i = 0; $i < count($vetor); $i++)
        {
            if($vetor[$i] % 2 == 0)
            {
                print"Posição $vetor[$i] <br>";
            }
            
        }


    
    
    ?>
    </div>
    
</body>
</html>