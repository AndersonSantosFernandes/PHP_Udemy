
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

                          /*As validações podem ser feitas com JS HTML e PHP  */
        $validacoes = []; // Iniciando a variável igualando a um colchete informa para o php que ela é um array
                          // e pode receber mais de uma entrada de dados como validações diferentes e  serem recuperadas
                          // posteriormente através de um foreach para exibição na tela do usuário. 

        if(count($_POST) > 0){
            

            if($_POST['nome'] === ""){
                $validacoes[] = "Por favor põe seu nome burrão";
            }
            if($_POST['email']=== ""){
                $validacoes[] = "Por favor põe seu e-mail taioba";
            }
            if($_POST['senha'] != $_POST['confSenha']){
                $validacoes[] = "Seu imbecil, digitou senhas diferentes";
            }elseif(empty($_POST['email']) || empty($_POST['nome'])){
                $validacoes[] = "Seu imbecil, ve se digita alguma coisa no campo de senha.";
            }

        }
        
        if(count($validacoes)){

            foreach($validacoes as $validacao){

                echo $validacao . "<br>";
            }


        }
    
    ?>
     
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" id="" placeholder="Nome">
        </div>
        <div>
            <input type="text" name="email" id="" placeholder="email">
        </div>
        <div>
            <input type="text" name="senha" id="" placeholder="Senha">
        </div>
        <div>
            <input type="text" name="confSenha" id="" placeholder="Conf Senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <h2><?php
   
        
    ?></h2>
    <h2>
        Explanação <hr>
        
    </h2>
    </div>
    
</body>
</html>