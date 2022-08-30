
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

        function alteraDados($nome, $idade){

            $nome = "Sr. $nome";
            $idade = "$idade anos";

            return[$nome, $idade];
        }

        $dados = alteraDados("Anderson", 44);

        print_r($dados). "<br>";
        echo "<br>";    

            echo $dados[0] ."<br>";
            echo $dados[1] ."<br>";

    
    
    ?>
    <br><br><br>
    <center>
        <h2>
            Retorno de múltiplos dados da função organizando-os no retorno em formato de array
            usando colchetes para retorno dos argumentos. <br>
            return[arg1,arg2,arg3....]

        </h2>
    </center>
    </div>
    
</body>
</html>