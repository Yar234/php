<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задачи</title>
</head>

<body>
  <h1>Задачи</h1>

  <?php foreach ($tasks as $task) : ?>
    <div>
      <?= $task ?> Done
    </div>
  <?php endforeach ?>
</body>

</html>