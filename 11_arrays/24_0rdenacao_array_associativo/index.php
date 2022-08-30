
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

        $arr = [
            'anderson'=>43,
            'delzilane'=>44,
            'joao'=>15,
            'luiz'=>9
        ];
        asort($arr);
        print_r($arr);
        echo "<br>";

        $arr2 = [
            'anderson'=>53,
            'delzilane'=>14,
            'joao'=>35,
            'luiz'=>77
        ];
        arsort($arr2);
        print_r($arr2);
        echo "<br>";
    
        $arr3 = [
            'anderson'=>43,
            'delzilane'=>44,
            'joao'=>15,
            'luiz'=>9
        ];
        ksort($arr3);
        print_r($arr3);
        echo "<br>";

        $arr4 = [
            'anderson'=>43,
            'delzilane'=>44,
            'joao'=>15,
            'luiz'=>9
        ];
        krsort($arr4);
        print_r($arr4);
        echo "<br>";
    
    ?>
    <br><br><br>
    <center>
        <h2>
            Com as funções "asort()" e "arsort" é possível ordenar pelos valores arrays associativos
            ascendente ou descendentemente. <br>
            Com "ksort()" e "krsort()", o array é ordenado pelas chaves. 
        </h2>
    </center>
    </div>
    
</body>
</html>