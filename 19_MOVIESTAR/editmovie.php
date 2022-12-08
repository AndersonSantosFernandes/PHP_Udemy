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
<h2 class="section-titles">Editar dados dos filmes</h2>
</div>
<?php
require_once("templates/footer.php");
?>