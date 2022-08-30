
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
        $arr = [];
        for($i = 10; $i<=20; $i++)
        {
            array_push($arr, $i); //
        }
        //print_r($arr);        
        for($j = 0; $j <count($arr); $j++)
        {
            if($arr[$j] % 2 != 0)
            {
                echo $arr[$j] ." é númeri ímpar <br>";
            }
        }        
    ?>
    </div>    
</body>
</html>