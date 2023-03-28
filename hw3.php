<?php

$firsArray = array(1, 22, 13, 535, 5, 42, 10, 0, 3, 111);
$secondArray = array(8, 1, 9, 22, 34, 10, 34, 55, 60, 0);

$result = array();

for ($i = 0; $i < count($firsArray); $i++) {
  $result[] = $firsArray[$i] * $secondArray[$i];
}

print_r($result);

// =============================================================================

$name = readline("Как зовут именинника? ");
$age = readline("Сколько ему лет? ");

$message = "Дорогой {$name}, поздравляем Вас с {$age}-летием!
Желаем крепкого здоровья, счастья, любви и успеха во всех начинаниях.\n";

echo $message;

// =============================================================================


$wishes = ["счастья", "здоровья", "любви"];
$epithets = ["бесконечного", "крепкого", "незабываемого"];

$name = readline("Как зовут именинника? ");
$age = readline("Сколько ему лет? ");

shuffle($wishes);
shuffle($epithets);

$wishesRand = array_rand($wishes, 3);
$epithetsRand = array_rand($epithets, 3);

$total_congratulations = [];
for ($i = 0; $i < 3; $i++) {
  $congratulations = [];
  $congratulations[] = $epithets[$epithetsRand[$i]];
  $congratulations[] = $wishes[$wishesRand[$i]];

  $total_congratulations[$i] = implode(" ", $congratulations);
};

$text = implode(", ", $total_congratulations);

$text = substr_replace($text, " и", strripos($text, ","), 1);

echo "Дорогой {$name}, поздравляю Вас с {$age}-летием! Желаю {$text}.\n";


// =============================================================================

$students = [
  'ИТ20' => [
    'Иванов Иван' => 5,
    'Кириллов Кирилл' => 3,
    'Вася Ганчаров' => 2,
    'Алексеев Алексей' => 4
  ],
  'БАП20' => [
    'Антонов Антон' => 4,
    'Миша Медведев' => 5,
    'Сидоров Сидор' => 2
  ]
];

// среднее значение по группам
$averages = [];
foreach ($students as $group => $group_students) {
  $sum = 0;
  $count = count($group_students);
  foreach ($group_students as $student => $grade) {
    $sum += $grade;
    if ($grade < 3) {
      $expelled[] = [$group, $student, $grade];
    }
  }
  $averages[$group] = $sum / $count;
}

// Вывод группы с самым большим средним значением
arsort($averages);
$best_group = key($averages);
echo "Группа с наилучшим средним значением успеваемости: {$best_group}'\n'";

// Формирование списка на отчисление
$expelled_by_group = [];
foreach ($expelled as $expelled_student) {
  $group = $expelled_student[0];
  $student = $expelled_student[1];
  $grade = $expelled_student[2];
  $expelled_by_group[$group][] = [$student, $grade];
}

// Вывод списка на отчисление
echo "Список на отчисление:\n";
print_r($expelled_by_group);
