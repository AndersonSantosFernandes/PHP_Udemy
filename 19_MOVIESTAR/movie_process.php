<?php

require_once("globals.php");
require_once("db.php");
require_once("models/Movie.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);
$movieDao = new MovieDAO($conn, $BASE_URL);

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
    #Validação mínima de dados
    if (!empty($title) && !empty($description) && !empty($category)) {

        $movie->title = $title;
        $movie->description = $description;
        $movie->trailer = $trailer;
        $movie->category = $category;
        $movie->length = $length;
        $movie->users_id = $userData->id;

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

        $movieDao->create($movie);

    } else {
        $message->setMessage("Insira ao menos título, descrição e categoria paara inserir informações.", "error", "back");
    }

} elseif ($type === "delete") {

    // Recebe dados do form
    $id = filter_input(INPUT_POST, "id");

    //verificar se o usuário é dono do filme
    $movie = $movieDao->findById($id);

    if ($movie) {
        if ($movie->users_id === $userData->id) {
            $movieDao->destroy($movie->id);
        } else {
            $message->setMessage("Estas informações não condizem com o proposito.", "error", "index.php");
        }
    } else {
        $message->setMessage("Estas informações não condizem com o proposito.", "error", "index.php");
    }

} elseif ($type === "update") {
    //receber os dados dos inputs
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");
    $id = filter_input(INPUT_POST, "id");

    $movieData = $movieDao->findById($id);

    #Verifica se encontrou o filme
    if ($movieData) {

        #Verifica se o filme é do usuário
        if ($movieData->users_id === $userData->id) {
            #Validação mínima de dados
            if (!empty($title) && !empty($description) && !empty($category)) {
                #Fazer a edição do filme
                $movieData->title = $title;
                $movieData->description = $description;
                $movieData->trailer = $trailer;
                $movieData->category = $category;
                $movieData->length = $length;

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

                        $movie = new Movie();

                        $imageName = $movie->imageGenerateName();

                        imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
                        $movieData->image = $imageName;

                    } else {
                        // Se aimagem não for válida, direciona para pagina anterior
                        $message->setMessage("Arquivos aceitos: jpeg, jpg e png.", "error", "back");
                    }
                }
                $movieDao->update($movieData);
            } else {
                $message->setMessage("Insira ao menos título, descrição e categoria para atualizar.", "error", "back");
            }
        } else {
            $message->setMessage("Estas informações não condizem com o proposito.", "error", "index.php");
        }
    } else {
        $message->setMessage("Estas informações não condizem com o proposito.", "error", "index.php");
    }
} else {
    $message->setMessage("Estas informações não condizem com o proposito.", "error", "index.php");
}

?>