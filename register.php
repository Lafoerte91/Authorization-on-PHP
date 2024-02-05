<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/main.css">
  <title>Авторизация и регистрация</title>
</head>
<body>

<form action="./vendor/signup.php" method="post" enctype="multipart/form-data">
  <label>ФИО</label>
  <input type="text" name="full_name" placeholder="Введите свое полное имя">
  <label>Логин</label>
  <input type="text" name="login" placeholder="Введите свой логин">
  <label>Почта</label>
  <input type="email" name="email" placeholder="Введите адрес своей почты">
  <label>Изображение профиля</label>
  <input type="file" name="avatar">
  <label>Пароль</label>
  <input type="password" name="password" placeholder="Введите пароль">
  <label>Подтверждение пароля</label>
  <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
  <button>Войти</button>
  <p>
  У вас уже есть аккаунт? - <a href="./index.php">Авторизуйтесь</a>
</p>
</form>
  
</body>
</html>