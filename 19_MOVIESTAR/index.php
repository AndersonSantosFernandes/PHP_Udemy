<?php
require_once("templates/header.php");
require_once("dao/MovieDAO.php");

//DAO dos filmes

$movieDao = new MovieDAO($conn, $BASE_URL);

$latesMovies = $movieDao->getLatestMovies();

$actionMovies = $movieDao->getMoviesByCategory("Ação");
$romanseMovies = $movieDao->getMoviesByCategory("Romanse");
$artesMarciaisMovies = $movieDao->getMoviesByCategory("Artes Marciais");
$DramaMovies = $movieDao->getMoviesByCategory("Drama");
$FiccaoMovies = $movieDao->getMoviesByCategory("Ficção");
$corridasMovies = $movieDao->getMoviesByCategory("Corridas");

?>
<div id="main-container" class="container-fluid">
  <h2 class="section-titles">Filmes novos</h2>
  <p class="section-description">Veja as críticas adicionadas no MovieStar</p>
  <div class="movies-container">
    <?php foreach ($latesMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>

    <?php if (count($latesMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>

  </div>

  <h2 class="section-titles">Ação</h2>
  <p class="section-description">Veja os filmes de ação</p>
  <div class="movies-container">

    <?php foreach ($actionMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>
    <?php if (count($actionMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>
  </div>

  <h2 class="section-titles">Romanse</h2>
  <p class="section-description">Veja os filmes de romanse</p>
  <div class="movies-container">

    <?php foreach ($romanseMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>
    <?php if (count($romanseMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>
  </div>

  <h2 class="section-titles">Artes Marciais</h2>
  <p class="section-description">Veja os filmes de Artes Marciais</p>
  <div class="movies-container">

    <?php foreach ($artesMarciaisMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>
    <?php if (count($artesMarciaisMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>
  </div>

  <h2 class="section-titles">Drama</h2>
  <p class="section-description">Veja os filmes de Drama</p>
  <div class="movies-container">

    <?php foreach ($DramaMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>
    <?php if (count($DramaMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>
  </div>

  <h2 class="section-titles">Ficção</h2>
  <p class="section-description">Veja os filmes de Ficção</p>
  <div class="movies-container">

    <?php foreach ($FiccaoMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>
    <?php if (count($FiccaoMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>
  </div>

  <h2 class="section-titles">Corridas</h2>
  <p class="section-description">Veja os filmes de Corridas</p>
  <div class="movies-container">

    <?php foreach ($corridasMovies as $movie): ?>
    <?php require("templates/movie_card.php") ?>
    <?php endforeach; ?>
    <?php if (count($corridasMovies) === 0): ?>
    <p class="empty-list">Ainda nã há filmes cadastrados</p>
    <?php endif; ?>
  </div>

</div>
<?php
require_once("templates/footer.php");
?>