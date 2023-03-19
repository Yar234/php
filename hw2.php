<?php

// $answer = readline("В каком году был разработан JavaScript? ");

// if ($answer == 1995) {
//   echo "Правильно, Вы молодец!\n";
// } else {
//   echo "Не верно\n";
// }
?>

<?php
$name = readline("Как Вас зовут? ");

for ($i = 1; $i <= 3; $i++) {
  ${"task$i"} = readline("Какая задача стоит перед вами сегодня? ");
  ${"timeOfTask$i"} = readline("Сколько примерно времени эта задача займет? ");
};

echo "$name, сегодня у Вас запланировано 3 приоритетных задачи на день:\n";
$allTime = null;
for ($i = 1; $i <= 3; $i++) {
  echo "- ${"task$i"} (${"timeOfTask$i"})ч \n";
  $allTime = $allTime + ${"timeOfTask$i"};
};
echo "Примерное время выполнения плана = {$allTime}ч \n";
