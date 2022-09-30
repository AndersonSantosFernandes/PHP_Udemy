<?php

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $senha = $_GET['senha'];

}
else
{
    $nome = "erro";
    $idade = "erro";
    $senha = "erro";

}





?>

<h2>Seu nome é <?php echo $nome?> e você tem <?php echo $idade?> anos e sua senha é <?php echo $senha?></h2>