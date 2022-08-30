
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

        $pontuacao = [
            'anderson' => 28,
            'delzilane' => 33,
            'joao' => 44,
            'luiz' => 55
        ];        
            arsort($pontuacao);
            print "<ol>";
            foreach($pontuacao as $chave => $valor ){
                print "<li> $chave - $valor </li><br>";
            }
            print "</ol>";    
    ?>
    <br><br><br>
    <center>
        <h2>
            Criar u array associativo com nome e pontuação depois ordenar do maior para o menor.
        </h2>
    </center>
    </div>
    
</body>
</html>