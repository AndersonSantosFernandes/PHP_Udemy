<?php
require_once("templates/header.php");
require_once("models/Movie.php");
require_once("dao/MovieDAO.php");

//Pegar o id do filme
$id = filter_input(INPUT_GET, "id");

$movie;

$movieDao = new MovieDAO($conn, $BASE_URL);

if(empty($id)){
    $message->setMessage("Filme não encontrado.", "error", "index.php");
}else{
    $movie = $movieDao->findById($id);

    // verificar a existencia de um filme
    if(!$movie){
        $message->setMessage("Filme não encontrado.", "error", "index.php");
    }
}


//checar se o filme é do usuário

$userOwnsMovie = false;

if (!empty($userData)){
    if($userData->id === $movie->id){
        $userOwnsMovie = true;
    }

}

?>
<div id="main-container" class="container-fluid">
<h2 class="section-titles">Trailers dos filmes</h2>
</div>
<?php
require_once("templates/footer.php");

?>