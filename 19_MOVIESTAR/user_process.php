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
if ($type === "update") {

    $userData = $userDao->verifyToken(); 

    // Receber dados do usuário
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $bio = filter_input(INPUT_POST, "bio");

    //criar um novo objeto de usuário
    $user = new User();

    // Preencher os dados
    $userData->name = $name;
    $userData->lastname = $lastname;
    $userData->email = $email;
    $userData->bio = $bio;

    //Upload de imagem 
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) { // Se estiver vindo um nome e um arquivo a enviar, o bloco é executado

        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"]; // Formatos de imagens aceitos
        $jpgArray = ["image/jpeg", "image/jpg"];

       
        //Checar tipo de imagem 
        if (in_array($image["type"], $imageTypes)) {

            //Checar se é jpg
            if (in_array($image["type"], $jpgArray)) {

                $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                
                //imagem é png
            } else {
                $imageFile = imagecreatefrompng($image["tmp_name"]);

            }

            // Gerando nome para imagem 
            $imageName = $user->imageGenerateName();
            
            imagejpeg($imageFile, "./img/users/" . $imageName, 100);

            $userData->image = $imageName;

        } else {
            // Se aimagem não for válida, direciona para pagina anterior
            $message->setMessage("Arquivos aceitos: jpeg, jpg e png.", "error", "back");
        }

    }

    $userDao->update($userData);


    // Atualizar senha
} elseif ($type === "changepassword") {

    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
    
    $userData = $userDao->verifyToken();
    $id = $userData->id;

    if($password == $confirmpassword){

        $user =  new User();

        $finalPassword = $user->generatePassword($password);

        $user->password = $finalPassword;
        $user->id = $id;

        $userDao->changePassword($user);

    }else{
        $message->setMessage("As senhas não são iguis.", "error", "back");  
    }

} else {
    $message->setMessage("Estas informações nã condizem com o proposito.", "error", "index.php");
}




?>