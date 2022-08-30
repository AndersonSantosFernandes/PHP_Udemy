
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
        $arr = ['porta' => 100,
                'maçaneta' => 4,
                'motor' => 2000,
                'retrovisor' => 8,
                'pneu' => 300,
                'parabrisa' => 180,
                'parafuso' => 7.5                
               ];

        function precosCaros($arr){

            $arrItensCarros = [];

             foreach($arr as $items => $preco){
                if ($preco > 10){
                    array_push($arrItensCarros, $items);
                }
             }

             return $arrItensCarros;

        }
        $novoArr = precosCaros($arr);

        print_r($novoArr);
    
    ?>
    <br><br><br>
    <center>
        <h2>
            Array associativo é quando já na criação do array damos um nome para o índice 
            e atrelamos um valor ao mesmo. <br><br>

            Criar uma função que recebe caracterrísticas de algum objeto como 
            argumento(carro, sofa, cafeteria), em array associativo;
            o array deve conternome=> preço;
            retorne apenas is itens que custam mais que R$10;
            imprima o retorno.
        </h2>
    </center>
    </div>
    
</body>
</html>