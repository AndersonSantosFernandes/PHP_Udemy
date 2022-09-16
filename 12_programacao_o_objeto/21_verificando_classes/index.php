
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
        public $pelo;
        public $cor;
        public $sexo;

        public function falar(){} //metodos são funções
        public function andar(){}
    }

    if(class_exists("Animal")){
        echo "A classe animal existe<br>";
    }
    else
    {
        echo "A classe animal não existe<br>";
    }
    if(class_exists("Humano")){
        echo "A classe humano existe<br>";
    }
    else
    {
        echo "A classe humano não existe<br>";
    }
    print_r(get_class_vars("Animal"));
    echo "<br>";
    print_r(get_class_methods("Animal"));
    echo "<br>";
    
    ?>
     <br><br>
    
    <h2>
        Explanação <br>
        class_exists(), get_class_methods(), get_class_vars(). <br>
        Estes tres métodos servem para entender as classes, onde o primeiro verifica se a classe 
        existe, em valor booleano, portanto dever ser verificado com if. <br> 
        o segundo retorna em forma de array os métodos dentro de uma classe o terceiro
         tembém em u forma de array os atrubutos da classe pesquisada.
    </h2>
    </div>
    
</body>
</html>