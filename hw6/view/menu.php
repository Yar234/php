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

<!-- <?php if (is_null($username)) : ?>
  
  <a href="/?controller=security">Войти</a>
<?php else : ?>
  <?= $username ?> <a href="/?controller=security&action=logout">Выйти</a>
  <a href="/?controller=tasks">Задачи</a>
<?php endif; ?> -->