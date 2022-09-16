
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
    width: 700px;
    height: 500px;
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
        class Car{
            public $cor;
            public $portas;
            public $marca;
            function __construct($cor, $portas, $marca){
                $this->cor = $cor;
                $this->portas = $portas;
                $this->marca = $marca;
            }
        }
        $ferrari = new Car("vermelha", 2, "ferrari");
    echo "O carro é da marca $ferrari->marca, tem a cor $ferrari->cor e tem $ferrari->portas portas. <br>";
    $parati = new Car("verde", 4, "VolksWagen");
    echo "O carro é da marca $parati->marca, tem a cor $parati->cor e tem $parati->portas portas. <br>";    
    ?>
     <br><br>
    
    <h2>
        Explanação <br>
        Com um construtor pdemos passar parametros nas classes e depois inicializar um objeto diretamente
        
    </h2>
    <pre>
        
        class Car{
            public $cor;
            public $portas;
            public $marca;
            function __construct($cor, $portas, $marca){
                $this->cor = $cor;
                $this->portas = $portas;
                $this->marca = $marca;
            }
        }
        $ferrari = new Car("vermelha", 2, "ferrari");
    echo "O carro é da marca $ferrari->marca, tem a cor $ferrari->cor e tem $ferrari->portas portas. <br>";
    $parati = new Car("verde", 4, "VolksWagen");
    echo "O carro é da marca $parati->marca, tem a cor $parati->cor e tem $parati->portas portas. <br>";    
    
        </pre>
    </div>
    
</body>
</html>