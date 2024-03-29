<?php

/**
 * @var Task $task
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задачи</title>
</head>

<body>
  <h1><?= $pageHeader ?></h1>

  <?php if (is_null($username)) : ?>
    <a href="/?controller=security">Войти</a>
  <?php else : ?>
    <?= $username ?> <a href="/?controller=security&action=logout">Выйти</a>
    <a href="/">Главная</a>
  <?php endif; ?><br><br>

  <form action="/controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Добавьте задачу">
    <input type="submit" value="Добавить">
  </form>

  <ul>
    <?php foreach ($tasks as $key => $task) : ?>
      <div id="<?= $task->getId() ?>">
        <li><?= $task->getDescription() ?></li>
        <a href="/?controller=tasks&action=done&key=<?= $task->getId() ?>">[Done]</a><br><br>
        <button class="done" data-id="<?= $task->getId() ?>">DONE</button>
        <br><br>
      </div>
    <?php endforeach ?>
  </ul>

  <script>
    let buttons = document.querySelectorAll('.done');
    buttons.forEach((elem) => {
      elem.addEventListener('click', () => {
        let id = elem.getAttribute('data-id');
        (
          async () => {
            const response = await fetch('/?controller=tasks&action=apidone&id=' + id);
            const answer = await response.json();
            document.getElementById(answer.task_id).remove();
          }
        )();
      })
    })
  </script>
</body>

</html>