<?php
require_once("templates/header.php");
require_once("models/User.php");
require_once("dao/UserDAO.php");
$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$fullName = $user->getFulName($userData);

if ($userData->image == "") {
  $userData->image = "user1.png";
}
?>
<div id="main-container" class="container-fluid">
  <div class="col-md-12 ">
    <form action="<?= $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="type" value="update">
      <div class="row">
        <div class="col-md-4">
          <h1>
            <?= $fullName ?>
          </h1>
          <p class="page-description">Altere seus dados abaixo</p>
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite o seu nome"
              value="<?= $userData->name ?>">
          </div>
          <div class="form-group">
            <label for="lastname">Sobrenome</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Digite o seu sobrenome"
              value="<?= $userData->lastname ?>">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control disabled" readonly name="email" id="email"
              placeholder="Digite o seu nome" value="<?= $userData->email ?>">
          </div>
          <input type="submit" class="btn card-btn" value="Alterar dados">
        </div>
        <div class="col-md-4">
          <div id="profile-image-container" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')"></div>
          <div class="form-group">
            <label for="image">Foto</label>
            <input type="file" class="form-control-file" name="image" id="">
          </div>
          <div class="form-group">
            <label for="bio">Sobr você</label>
            <textarea class="form-control" name="bio" id="bio" rows="5"
              placeholder="Conte um pouco sobre você"><?= $userData->bio ?></textarea>
          </div>
        </div>
      </div>
    </form>
    <div class="row" id="change-password-container">
      <div class="col-md-4">
        <h2>Alteração de senha</h2>
        <p class="page-description">Digite nova senha e confirme para alterar</p>
        <form action="<?= $BASE_URL ?>user_process.php" method="POST">
          <input type="hidden" name="type" value="changepassword">
          <input type="hidden" name="id" >
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Digite a nova senha">
          </div>
          <div class="form-group">
            <label for="confirmpassword">Senha</label>
            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"
              placeholder="Confirme a nova senha">
          </div>
          <input type="submit" class="btn card-btn" value="Alterar senha">
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require_once("templates/footer.php");
?>