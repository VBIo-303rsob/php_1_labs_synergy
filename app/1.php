<?php
// Ввод интервала с клавиатуры с валидацией
do {
    $n = (int)readline("Введите начало интервала: ");
} while (!is_int($n) || $n <= 0);

do {
    $m = (int)readline("Введите конец интервала: ");
} while (!is_int($m) || $m <= $n);

// Функция для нахождения суммы цифр числа
function sumOfDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    return $sum;
}

// Поиск чисел, которые делятся на сумму своих цифр
$numbers = [];
for ($i = $n; $i <= $m; $i++) {
    if ($i % sumOfDigits($i) == 0) {
        $numbers[] = $i;
    }
}

// Вывод результатов
echo "Интервал: [$n, $m]\n";
echo "Числа, которые делятся на сумму своих цифр: " . implode(", ", $numbers) . "\n";
?>