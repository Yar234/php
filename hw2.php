<?php

// 1. do while

do {
  $answer = readline("В каком году был разработан JavaScript? Варианты: 1991, 1995, 1998 ");

  if ($answer == 1995) {
    echo "Правильно, Вы молодец!\n";
    break;
  } elseif ($answer == 1991 || $answer == 1998) {
    echo "Не верно\n";
  }
} while (true);

// 2. switch case

do {
  $answer = readline("В каком году был разработан JavaScript? Варианты: 1991, 1995, 1998 ");

  switch ($answer) {
    case "1995":
      echo "Правильно, Вы молодец!\n";
      break (2);
    case "1991":
    case "1998":
      echo "Не верно!\n";
  }
} while (true);

// 3. цикл с проверкой

do {
  $answer = readline("В каком году был разработан JavaScript? Варианты: 1991, 1995, 1998 ");
} while ($answer != 1991 && $answer != 1995 && $answer != 1998);

if ($answer == 1995) {
  echo "Правильно, Вы молодец!\n";
} else {
  echo "Не верно!\n";
}
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
