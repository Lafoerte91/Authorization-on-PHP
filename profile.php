<?php 
session_start();
if(!$_SESSION['user']) {
  header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/main.css">
  <title>Профиль</title>
</head>
<body>

  <form>
    <img src="<?=  $_SESSION['user']['avatar'] ?>" width="200" alt="Фото профиля">
    <h2 style="margin: 0 10px;"><?= $_SESSION['user']["full_name"] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="./vendor/logout.php" class="logout">Выход</a>
  </form>
  
</body>
</html>