<?php
  require_once("templates/header.php");
  require_once("dao/MovieDAO.php");

//DAO dos filmes

$movieDao = new MovieDAO($conn, $BASE_URL);

$latesMovies = $movieDao->getLatestMovies();

$actinMovies = [];
$comedyMovies = [];

?>
  <div id="main-container" class="container-fluid">
    <h2 class="section-titles">Filmes novos</h2>
    <p class="section-description">Veja as críticas adicionadas no MovieStar</p>
    <div class="movies-container">
      <?php foreach($latesMovies as $movie): ?>
       <?php require("templates/movie_card.php") ?>
      <?php endforeach; ?>
      
    </div>

    <h2 class="section-titles">Ação</h2>
    <p class="section-description">Veja os filmes de ação</p>
    <div class="movies-container"></div>

    <h2 class="section-titles">Romanse</h2>
    <p class="section-description">Veja os filmes de romanse</p>
    <div class="movies-container"></div>
  </div>
<?php
  require_once("templates/footer.php");
?>