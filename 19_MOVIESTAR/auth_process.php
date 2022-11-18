<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    //Resgata o tipo de formulário
    $type = filter_input(INPUT_POST, "type"); // filter_input-> função que filtra os dados inseridos maliciosamente pelo usuário

    
    //Verificar o tipo de formulário
    if($type === "register"){

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmparrword = filter_input(INPUT_POST, "confirmparrword");

        // Verificação de dados mínimos
        if($name && $lastname && $email && $password){

        }else{
            // Mensagem de erro
            $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
        }
        
    }elseif($type === "login"){
        echo "logando";
    }


?>

