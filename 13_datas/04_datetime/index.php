
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
        $data = new DateTime();
        print_r($data);
        echo "<br>";
    
    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
    Utilizando o código abaixo podemos instanciar um objeto em formato de array com as informações
    do timestamp, mas não podemos utilizar esses velores. Existem outros métodos para fazer isso.
        <pre>
        $data = new DateTime();
        print_r($data);
        echo "<br>";
        </pre>
    </h2>
    </div>
    
</body>
</html>