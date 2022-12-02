<?php

require_once("globals.php");
require_once("db.php");
require_once("models/Movie.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);

//Resgata o tipo de formulário
$type = filter_input(INPUT_POST, "type"); // filter_input-> função que filtra os dados inseridos maliciosamente pelo usuário

//Resgata os dados do usuário
$userData = $userDao->verifyToken();

if ($type === "create") {
    //receber os dados dos inputs
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");

    $movie = new Movie();

    if (!empty($title) && !empty($description) && !empty($category)) {

        $movie->title = $title;
        $movie->description = $description;
        $movie->trailer = $trailer;
        $movie->category = $category;
        $movie->length = $length;

        //upload de imagem do filme
        if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) { //verifica se tem imagem vindo por post e o nome da mesma

            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"]; // Formatos de imagens aceitos
            $jpgArray = ["image/jpeg", "image/jpg"];

            if (in_array($image["type"], $imageTypes)) {

                //checar se a imagem é jpg
                if (in_array($image["type"], $jpgArray)) {
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                } else {
                    $imageFile = imagecreatefrompng($image["tmp_name"]);
                }

                $imageName = $movie->imageGenerateName();

                imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
                $movie->image = $imageName;

            } else {
                // Se aimagem não for válida, direciona para pagina anterior
                $message->setMessage("Arquivos aceitos: jpeg, jpg e png.", "error", "back");
            }

        }

        print_r($_POST);
        echo "<br>";
        print_r($_FILES);
        exit;
        $movieDao->create($movie);

    } else {
        $message->setMessage("Insira ao menos título, descrição e categoria paara inserir informações.", "error", "back");
    }

} else {

    $message->setMessage("Estas informações nã condizem com o proposito.", "error", "index.php");

}

?>