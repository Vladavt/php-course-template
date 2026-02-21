<h2>Лабораторная работа №7 — Блок-схемы</h2>

<div style="margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 5px solid #3e2f1c;">
    <h3>Задание 1. Проверка чётности числа</h3>
    <p>Блок-схема: начало → rand → вывод числа → условие (число % 2 == 0) → да: "Чётное" / нет: "Нечётное" → конец</p>

    <?php
    $number = rand(1, 200);
    echo "<p>Случайное число: <strong>$number</strong></p>";
    if ($number % 2 === 0) {
        echo "<p style='color:#2e7d32; font-weight:bold;'>Чётное</p>";
    } else {
        echo "<p style='color:#c62828; font-weight:bold;'>Нечётное</p>";
    }
    ?>
</div>

<div style="margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 5px solid #3e2f1c;">
    <h3>Задание 2. Наибольшее из двух чисел</h3>
    <p>Блок-схема: начало → rand два числа → сравнение a > b / a < b / a == b → соответствующий вывод → конец</p>

    <?php
    $a = rand(1, 100);
    $b = rand(1, 100);
    echo "<p>Числа: <strong>$a</strong> и <strong>$b</strong></p>";

    if ($a > $b) {
        echo "<p>Наибольшее: <strong>$a</strong></p>";
    } elseif ($b > $a) {
        echo "<p>Наибольшее: <strong>$b</strong></p>";
    } else {
        echo "<p>Числа равны: <strong>$a</strong></p>";
    }
    ?>
</div>

<div style="margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 5px solid #3e2f1c;">
    <h3>Задание 3. Сумма чисел от 1 до N</h3>
    <p>Блок-схема: начало → rand N (10..100) → сумма = 0 → цикл for i=1 до N → сумма += i → вывод суммы → конец</p>

    <?php
    $N = rand(10, 100);
    $sum = 0;
    for ($i = 1; $i <= $N; $i++) {
        $sum += $i;
    }
    echo "<p>N = <strong>$N</strong></p>";
    echo "<p>Сумма чисел от 1 до $N = <strong>$sum</strong></p>";
    // или формула Гаусса для проверки: $sumGauss = $N * ($N + 1) / 2;
    ?>
</div>

<div style="margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 5px solid #3e2f1c;">
    <h3>Задание 4. Подсчёт положительных, отрицательных и нулевых чисел</h3>
    <p>Блок-схема: начало → массив 10 случайных чисел → счётчики = 0 → цикл по массиву → условия ( >0, <0, ==0 ) → инкремент → вывод счётчиков → конец</p>

    <?php
    $numbers = [];
    for ($i = 0; $i < 10; $i++) {
        $numbers[] = rand(-50, 50);
    }

    $positive = 0;
    $negative = 0;
    $zero = 0;

    foreach ($numbers as $num) {
        if ($num > 0) {
            $positive++;
        } elseif ($num < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    echo "<p>Массив: [" . implode(", ", $numbers) . "]</p>";
    echo "<p>Положительных: <strong>$positive</strong></p>";
    echo "<p>Отрицательных: <strong>$negative</strong></p>";
    echo "<p>Нулей: <strong>$zero</strong></p>";
    ?>
</div>

<div style="margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 5px solid #3e2f1c;">
    <h3>Задание 5. Поиск минимального числа в массиве</h3>
    <p>Блок-схема: начало → массив 10 случайных чисел → min = первый элемент → цикл по массиву → если текущий < min → min = текущий → вывод min → конец</p>

    <?php
    $numbers2 = [];
    for ($i = 0; $i < 10; $i++) {
        $numbers2[] = rand(1, 200);
    }

    $min = $numbers2[0];
    foreach ($numbers2 as $num) {
        if ($num < $min) {
            $min = $num;
        }
    }

    echo "<p>Массив: [" . implode(", ", $numbers2) . "]</p>";
    echo "<p>Минимальное число: <strong>$min</strong></p>";
    ?>
</div>