<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная</title>
</head>

<body>
  <h1><?= $pageHeader ?></h1>
  <?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="/?controller=security&action=logout">Выйти</a></p>
    <br>
    <a href="/">Главная</a>
    <a href="/?controller=second">Вторая</a>
    <a href="/?controller=tasks">Задачи</a>
    <a href="/?controller=guest">Гостевая</a>
  <?php else : ?>
    <a href="/?controller=registration">Зарегистрироваться</a>
    <a href="/?controller=security">Войти</a>
  <?php endif ?><br>
</body>

</html>