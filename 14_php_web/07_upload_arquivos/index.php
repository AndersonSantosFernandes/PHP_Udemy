
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

        if(isset($_FILES)){
            print_r($_FILES);
        }   
    ?>


        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div>
                <input type="file" name="imagem" id="">
            </div>
                <input type="submit" value="Enviar">
        </form>
     <br><br>
    
    <h2>
        Explanação <hr>
        Para fazer o upload de arquivos é necessário utilizar a sintaxe "enctype="multipart/form-data"" 
        no formulário <br>

        
    </h2>
    <pre>
        
    </pre>
    </div>
    
</body>
</html>