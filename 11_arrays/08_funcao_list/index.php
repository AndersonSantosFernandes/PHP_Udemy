
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

        $pessoa = ["Anderson",43, "programador", "castanhos"];

        // print_r($pessoa);
        // echo "<br>";
        
        list($nome, $idade, $profissao, $olhos) = $pessoa;

        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Profissão: $profissao <br>";
        echo "Olhos: $olhos <br>";
    
    
    ?>
    <br><br><br>
    <center>
        <h2>
           A função list nos permite "desconstruir um array". Basta criar a função e iserir entre parenteses
           as variáveis de acordo com o número de ídices do array e igualar a função com o array:
           <br>
           $array = ["anderson", 43]; <br>
           list($nome, $idade) = $array;

        </h2>
    </center>
    </div>
    
</body>
</html>