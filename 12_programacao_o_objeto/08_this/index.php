
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

    class Animal{
            public $nome;
        function escolherNome($nome){
            $this->nome = $nome;
        }


        function latir(){
            return "au au <br>";
        }

        function latirForte(){
            return strtoupper($this->latir());
        }
    }
    
    $frida = new Animal;
    echo "O nome do animal é: $frida->nome <br>";

    $frida->escolherNome("Frida");

    echo "O nome do animal é: $frida->nome <br>";
    
    echo $frida-> latir();
    echo $frida->latirForte();


    ?>
     <br><br>
    
    <h2>
       Com o 'this' podemos chamar metodos da propria classe de dentro dela mesma. 
    </h2>
    </div>
    
</body>
</html>