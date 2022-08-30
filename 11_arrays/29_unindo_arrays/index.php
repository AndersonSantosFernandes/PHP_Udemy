
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

        $arr1 = [1,2,3]; 
        $arr2 = [33,62,13]; 
        $arr3 = [1.6,2.5,3.8];
        $arr4 = ['Anderson', "Lidia", 'ednara', 'simone','michele'];
        
        $merge = array_merge($arr4, $arr2, $arr3, $arr1);

        foreach($merge as $chave => $valor){
            print "$valor - ";

        }
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            A função "array_merge()" possibilita a união de arrays independente dos dados.
        </h2>
    </center>
    </div>
    
</body>
</html>