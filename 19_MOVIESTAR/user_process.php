<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);


    //Resgata o tipo de formulário
    $type = filter_input(INPUT_POST, "type");

     //Atualizar usuário
     if($type === "update"){

        $userData = $userDao->verifyToken();
        
        // Receber dados do usuário
        $name = filter_input(INPUT_POST,"name");
        $lastname = filter_input(INPUT_POST,"lastname");
        $email = filter_input(INPUT_POST,"email");
        $bio = filter_input(INPUT_POST,"bio");

        //criar um novo objeto de usuário
        $user = new User();

        // Preencher os dados
        $userData->name = $name;
        $userData->lastname = $lastname;
        $userData->email = $email;
        $userData->bio = $bio;

        $userDao->update($userData);

        // Atualizar senha
    }elseif($type === "changepassword"){

    }else{
        $message->setMessage("Estas informações nã condizem com o proposito.", "error", "index.php");
    }




    ?>