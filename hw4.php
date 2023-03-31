<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$numbersDistribution = function ($num) {
  if ($num % 2 == 0) {
    return "четное";
  } else {
    return "нечетное";
  }
};

$result = array_map($numbersDistribution, $numbers);

print_r($result);

// =============================================================================

function arrayStats(array $numbers)
{
  $max = max($numbers);
  $min = min($numbers);
  $avg = array_sum($numbers) / count($numbers);
  return array("max" => $max, "min" => $min, "avg" => $avg);
};

$fnResult = arrayStats($numbers);
print_r($fnResult);

// =============================================================================

$box = [
  [
    0 => 'Тетрадь',
    1 => 'Книга',
    2 => 'Настольная игра',
    3 => [
      'Настольная игра',
      'Настольная игра',
    ],
    4 => [
      [
        'Ноутбук',
        'Зарядное устройство'
      ],
      [
        'Компьютерная мышь',
        'Набор проводов',
        [
          'Фотография',
          'Картина'
        ]
      ],
      [
        'Инструкция',
        [
          'Ключ'
        ]
      ]
    ]
  ],
  [
    0 => 'Пакет кошачьего корма',
    1 => [
      'Музыкальный плеер',
      'Книга'
    ]
  ]
];

function findItem($item, $array)
{
  foreach ($array as $value) {
    if (is_array($value)) {
      if (findItem($item, $value)) {
        return true;
      }
    } elseif ($value === $item) {
      return true;
    }
  }
  return false;
}

$item = 'Инструкция';
if (findItem($item, $box)) {
  echo "Предмет $item найден!" . PHP_EOL;
} else {
  echo "Предмет $item не найден." . PHP_EOL;
}
