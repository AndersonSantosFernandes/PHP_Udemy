
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

        /*Dados mocados são dados criados e array para similar tabelas de BD nã necessitando a criação de 
        um banco de dados apenas para testes */

        $usuario = [

            'nome' => 'Anderson',
            'idade' => 43,
            'profissao' => 'Desenvolvedor PHP'
        ];

        if($usuario){
            $nome = $usuario['nome'];
            $idade = $usuario['idade'];
            $profissao = $usuario['profissao'];
        }
    
    
    ?>
    <form action="">
        <div>
            <input type="text" name="nome" id="" placeholder="Seu nome" value="<?php echo $nome?>">
        </div>
        <div>
            <input type="number" name="nome" id="" placeholder="Sua idade" value="<?php echo $idade?>">
        </div>
        <div>
            <input type="text" name="nome" id="" placeholder="Sua profissão" value="<?php echo $profissao?>">
        </div>
        <div>
            <input type="submit" value="Enviar">    
        </div>
    </form>
     <br><br>
    
    <h2>
        Explanação <hr>
        
    </h2>
    </div>
    
</body>
</html>