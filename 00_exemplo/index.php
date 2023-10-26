<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/principal.css">
    <title>Template exemplo</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-image: linear-gradient(purple, gray, purple);
        }

        div#main {
            width: 500px;
            height: 400px;
            margin: auto;
            padding: 20px;
            background-color: azure;
        }

        h1 {
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
        $diferenca = strtotime(" -5 hours ");
       
        print_r($diferenca1);
        echo "<br>";
        $horas = date("d/m/Y H:i:s", $diferenca);
        $horas1 = date("dmYHis", $diferenca);
        // $minutos =time("h/m/s");
        $info = ["Anderson", "osasco", "SP"];
        
        echo $info[0] . "<br>";
        echo $info[1] . "<br>";
        echo $info[2] . "<br>";
        echo $horas."<br>";
   
        // echo $minutos."<br>";
        ?>
    </div>

</body>

</html>