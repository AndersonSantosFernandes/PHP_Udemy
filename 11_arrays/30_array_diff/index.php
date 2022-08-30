
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
        $arr2 = [2,4,6];

        $diff = array_diff($arr1, $arr2);

        print_r($diff);
        print "<br>";

        $diff2 = array_diff($arr2, $arr1    );

        print_r($diff2);
        print "<br>";
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            A função "array_diff($arr1, $arr2);" compara e mostra o que não tem do primeiro 
            argumento no segundo, no caso $arr1 e $arr2.
        </h2>
    </center>
    </div>
    
</body>
</html>