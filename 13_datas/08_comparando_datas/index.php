
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
    height: 530px;
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

        $dataA = new DateTime();
        $dataB = new DateTime(); 
        $dataC = new DateTime();

        $dataB->setDate(2023,01,15);
        $dataC->setDate(2023,01,15);

        $dataB->setTime(10,15,45);
        $dataC->setTime(10,15,45);

        if($dataB > $dataA){
            print "A data B é maior que a data A <br>";
        }
        if($dataA < $dataB){
            print "A data A é menor que a data B <br>";
        }

        if($dataB == $dataC){
            print "As datas B e C são iguais<br>";
        }

    
    
    ?>
     <br><br>
    
    <h2>
        Explanação <hr>
        Para as datas serem realmente iguais temos que usar o setTime() e o setDate(), pois
         até os minutos e segundos devem ser iguais.
    </h2>
    <pre>
    $dataA = new DateTime();
        $dataB = new DateTime(); 
        $dataC = new DateTime();
        $dataB->setDate(2023,01,15);
        $dataC->setDate(2023,01,15);
        $dataB->setTime(10,15,45);
        $dataC->setTime(10,15,45);
        if($dataB > $dataA){
            print "A data B é maior que a data A <br>";
        }
        if($dataA < $dataB){
            print "A data A é menor que a data B <br>";
        }
        if($dataB == $dataC){
            print "As datas B e C são iguais<br>";
        }
    </pre>
    </div>
    
</body>
</html>