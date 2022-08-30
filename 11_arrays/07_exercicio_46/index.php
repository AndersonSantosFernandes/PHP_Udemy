
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

    $array = 
        [
            
            [6,12,18,24,1,2,3,4,7,8,9],
            [7,14,21,28],
            [3,6,9,12],
            [10,20,30,40,50,60]
        ];
            
        for($i = 0; $i < count($array); $i++){

            echo "Externo" . ($i +1) . "<br>";

            for($j = 0; $j < count($array[$i]); $j++){
              /*  if($j +1 == count($array[$j])){
                    echo $array[$i][$j] ."  " ;
                }
                else
                {
                    echo $array[$i][$j] ." - " ;
                }*/
                echo $array[$i][$j] ." - " ;
            }
            echo "<br>";
        }

    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            explanação
        </h2>
    </center>
    </div>
    
</body>
</html>