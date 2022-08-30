
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
            $length = 0;
            $length2 = 0;
            $vetor = [10,30,"abc", "Anderson",12.5, 200, "toro", 9.9, 9, "patricia", "Delzilane"];
            $vetor2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
            $tamanho2 = count($vetor2);
            $tamanho = count($vetor);
            while($length <$tamanho)
            {
                if(is_string($vetor[$length]))
                {
                    print "$vetor[$length] <br>";                    
                }
                $length ++;
            }  
            
            echo "Continua <br><br>";



            while($length2 <$tamanho2)
            {
                if($vetor2[$length2] % 2 != 0)
                {
                    print "$vetor2[$length2] <br>";                    
                }
                $length2 ++;
            }  
        ?>
    </div>    
</body>
</html>