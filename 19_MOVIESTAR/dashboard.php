<?php
require_once("templates/header.php");

//verifica autenticação de usuário
require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");
$user = new User();

$userDao = new UserDAO($conn, $BASE_URL);
$movieDao = new MovieDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$userMovies = $movieDao->getMoviesByUserId($userData->id);



?>


<div id="main-container" class="container-fluid">
  <h2 class="section-titles">Dashboard</h2>
  <p class="section-descripiton">Adicione ou atualize informações</p>
  <div class="col-md-12" id="add-movie-container">

    <a href="<?= $BASE_URL ?>newmovie.php" class="btn card-btn">
      <i class="fas fa-plus"></i>Adicionar Filme
    </a>

  </div>

  <div id="deletar">
   
  </div>

  <div class="col-md-12" id="movies-dashboard">
    <table class="table">
      <thead>
        <th scope="col" class="dash-no">#</th>
        <th scope="col">Título</th>
        <th scope="col">Nota</th>
        <th scope="col" class="actions-column">Ações</th>
      </thead>
      <tbody>
        <?php foreach ($userMovies as $movie): ?>
        <tr>
          <td scope="row" class="dash-no">
            <?= $movie->id ?>
          </td>
          <td><a href="<?= $BASE_URL ?>movie.php?id=<?= $movie->id ?>" class="table-movie-title">
              <?= $movie->title ?>
            </a></td>
          <td><i class="fas fa-star"><?= $movie->rating ?></i></td>
          <td class="actions-column" id="acoes-col">
            <a href="<?= $BASE_URL ?>editmovie.php?id=<?= $movie->id ?>" class="edit-btn">
              <i class="far fa-edit ocult"> </i>Editar
            </a>
            <!-- <form action="<?= $BASE_URL ?>movie_process.php" method="POST"> -->
            <!-- <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $movie->id ?>"> -->
            <!-- <input type="button" value="Deletar" class="delete-btn"  onclick="showDelete(<?= $movie->id ?>)"> -->
            <button class="delete-btn" onclick="showDelete(<?= $movie->id ?>)">
              <i class="fas fa-times ocult"></i>Deletar
            </button>
            <!-- </form> -->
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  







</div>
<?php
require_once("templates/footer.php");
?>