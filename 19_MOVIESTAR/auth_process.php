<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);


    //Resgata o tipo de formulário
    $type = filter_input(INPUT_POST, "type"); // filter_input-> função que filtra os dados inseridos maliciosamente pelo usuário

    
    //Verificar o tipo de formulário
    if($type === "register"){

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmparrword = filter_input(INPUT_POST, "confirmpassword");

        // Verificação de dados mínimos
        if($name && $lastname && $email && $password){
           
            // Verificar se as senhas batem
            if($password == $confirmparrword){

                // Verificar se o email ja está cadastrado
                if($userDao->findByEmail($email) === false){
                   
                    $user = new User();

                    // criação de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);
                    
                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;

                    $auth = true;


                    $userDao->create($user, $auth);
                    
                    // password_hash($password, PASSWORD_DEFAULT); 

                }else{
                    $message->setMessage("E-mail já cadastrado, tente outro.", "error", "back");     
                }

            }else{
                $message->setMessage("As senhas não são iguais.", "error", "back");    
            }


        }else{
            // Mensagem de erro
            $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
            // print_r($message);
        }
        
    }elseif($type === "login"){
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        // Tenta autenticar usuário.
        if($userDao->authenticateUser($email, $password)){
             
            $message->setMessage("Seja bem vindo!", "success", "editprofile.php"); 
            

        }else{
            
            $message->setMessage("Nome de usuário ou senha está incorreto.", "error", "back");

        }
    }else{
        $message->setMessage("Estas informações nã condizem com o proposito.", "error", "index.php");
    }


?>

