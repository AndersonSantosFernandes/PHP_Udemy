
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
            "Anderson",
            1978,
            3.1416,
            false,
            [3,5,8]
        ];
        echo "verificação com print_r<br>";
print_r($arr);
echo"<br><br><br>";
echo "verificação com var_dump<br>";
var_dump($arr);
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            Para verificação de dados utilizamos o print_r e o var_dump, 
            onde o primeiro retorna somente os dados e o os valores dos ídices, mas o 
            segundo retorna isso tudo mais o tipo de dado inserido no ídice. 
        </h2>
    </center>
    </div>
    
</body>
</html>