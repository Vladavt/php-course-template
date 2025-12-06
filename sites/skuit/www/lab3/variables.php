<?php
// Объявление базовых переменных
$name = "Влад";
$age = 18;
$height = 167; // в см
$grades = [4, 5, 3, 4, 5];

// Математические операции
$birthYear = 2024 - $age;
$ageAfter5Years = $age + 5;
$heightInInches = $height / 2.54;
$heightInMeters = $height / 100;
$averageGrade = array_sum($grades) / count($grades);

// Операции со строками
$greeting = "Привет, " . $name . "!";

// Операции с массивом
$gradesCount = count($grades);
$maxGrade = max($grades);
$minGrade = min($grades);

// Генерация случайных чисел
$randomInt = rand(1, 100);
$randomFloat = rand(0, 100) / 100;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаб 3 - Основы PHP</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; }
        form { margin: 15px 0; }
        input, button { padding: 8px; margin: 5px; }
        .result { color: green; font-weight: bold; }
        .variable { color: blue; }
        .hint { color: #666; font-size: 0.9em; font-style: italic; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа 3</h1>
        
        <div class="section">
            <h2>Базовые переменные</h2>
            <p><span class="variable">Имя:</span> <?= $name ?></p>
            <p><span class="variable">Возраст:</span> <?= $age ?></p>
            <p><span class="variable">Рост (см):</span> <?= $height ?></p>
            <p><span class="variable">Оценки:</span> <?= implode(', ', $grades) ?></p>
        </div>

        <div class="section">
            <h2>Математические операции</h2>
            <p><span class="variable">Год рождения:</span> <?= $birthYear ?></p>
            <p><span class="variable">Возраст через 5 лет:</span> <?= $ageAfter5Years ?></p>
            <p><span class="variable">Рост в дюймах:</span> <?= round($heightInInches, 2) ?></p>
            <p><span class="variable">Рост в метрах:</span> <?= round($heightInMeters, 2) ?></p>
            <p><span class="variable">Средний балл:</span> <?= round($averageGrade, 2) ?></p>
        </div>

        <div class="section">
            <h2>Операции со строками</h2>
            <p><span class="variable">Приветствие:</span> <?= $greeting ?></p>
        </div>

        <div class="section">
            <h2>Операции с массивом</h2>
            <p><span class="variable">Количество оценок:</span> <?= $gradesCount ?></p>
            <p><span class="variable">Максимальная оценка:</span> <?= $maxGrade ?></p>
            <p><span class="variable">Минимальная оценка:</span> <?= $minGrade ?></p>
        </div>

        <div class="section">
            <h2>Случайные числа</h2>
            <p><span class="variable">Случайное целое (1-100):</span> <?= $randomInt ?></p>
            <p><span class="variable">Случайное дробное (0-1):</span> <?= $randomFloat ?></p>
        </div>

        <!-- Форма для расчетов -->
        <div class="section">
            <h2>Калькулятор преобразований</h2>
            <form method="POST">
                <label>Введите рост в см:</label>
                <input type="number" name="heightCm" value="<?= $_POST['heightCm'] ?? '' ?>" required>
                
                <label>Введите возраст:</label>
                <input type="number" name="age" value="<?= $_POST['age'] ?? '' ?>" required>
                
                <button type="submit" name="calculate">Рассчитать</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])) {
                $inputHeight = $_POST['heightCm'];
                $inputAge = $_POST['age'];
                
                $heightInches = $inputHeight / 2.54;
                $heightMeters = $inputHeight / 100;
                $birthYear = 2024 - $inputAge;
                $randomNumber = rand(1, 100);
                
                echo "<div class='result'>";
                echo "<p>Рост в дюймах: " . round($heightInches, 2) . "</p>";
                echo "<p>Рост в метрах: " . round($heightMeters, 2) . "</p>";
                echo "<p>Год рождения: " . $birthYear . "</p>";
                echo "<p>Случайное число: " . $randomNumber . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>