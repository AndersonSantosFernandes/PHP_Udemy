
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
        $arr = [
            [1,2,3],
            [2,4,6]

        ];
        print_r($arr);
        echo "<br>";

        echo $arr[0][1] . "<br>";
        echo $arr[1][2] . "<br>";

        echo count($arr); // vai retornar os elementos do vetor geral
        echo "<br>";
        echo count($arr[0]); // vai retornar os elementos do primeiro vetor interno
        echo "<br>";
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