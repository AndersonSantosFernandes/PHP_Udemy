
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
table{
    border-collapse: collapse;
}
td{
    border: 1px solid purple;
    width: 100px;
    padding: 5px;
}
    </style>
</head>
<body>
    <h1>Título</h1>
    <div id="main">
    <?php

        $dados = [
            'anderson' => 43,
            'Madalena'=> 19,
            'Fernanda'=> 16,
            'Emanuelle'=> 33,
            'Eliulde'=> 50
        ];
                echo "<table>
                    <tr> <td>NOMES</td> <td>ATRIBUTOS</td><tr>
                ";
                foreach($dados as $chave=>$valor){                       
                    echo "<tr><td>$chave</td><td>  $valor</td> 
                            </tr>";
                }
                echo "</table>";    
    ?>
    <br><br><br>
    <center>
        <h2>
            explanação
        </h2>
    </center>
    </div>
    
</body>
</html>