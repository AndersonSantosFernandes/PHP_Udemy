
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
    height: 450px;
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
    $pessoa = new class(){
            public $nome = "Anderson";
            public function falaNome(){
                echo "Meu nome é $this->nome <br>";
            }
    };
    echo $pessoa->nome . "<br>";
    $pessoa->falaNome();
    ?>
     <br><br>     
    <h2>
        Explanação <br>
        Neste tipo de classe podemos trabalhar apenas com o escopo em seu interior 
        não sendo possível inplementar, estender ou herdar deoutra ou para outra classse. <br>
        E como é criada a partir de uma variável, após  a chave de fechamento vai um ";" 
        para indicar o final da instrução.  
    </h2>
    <pre>
    $pessoa = new class(){
            public $nome = "Anderson";
            public function falaNome(){
                echo "Meu nome é $this->nome ";
            }
    };
    echo $pessoa->nome ;
    $pessoa->falaNome(); 
    </pre>
    </div>
    
</body>
</html>