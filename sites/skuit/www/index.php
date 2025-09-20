<?php
// Подключаем файл с переменными для lab3
require_once __DIR__ . '/lab3/variables.php';

// Выполняем все вычисления ДО вывода HTML
// 2. Математические операции:
$birthYear = 2024 - $age;
$ageIn5Years = $age + 5;
$heightInInches = $heightCm / 2.54;
$heightInMeters = $heightCm / 100;
$averageGrade = array_sum($grades) / count($grades);

// 3. Операции со строками
$greeting = "Привет, " . $name . "!";

// 4. Операции с массивом:
$gradesCount = count($grades);
$maxGrade = max($grades);
$minGrade = min($grades);

// 5. Генерация случайных чисел:
$randomInt = rand(1, 100);
$randomFloat = rand(0, 100) / 100;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаб 3 - Основы PHP</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 40px; 
            background: #f5f5f5;
        }
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px; 
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .section { 
            margin: 25px 0; 
            padding: 20px; 
            background: #f8f9fa;
            border-left: 4px solid #3498db;
            border-radius: 5px;
        }
        .section h2 {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .variable-block {
            background: #e8f4fc;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: 3px solid #3498db;
        }
        .variable-name {
            color: #2980b9;
            font-weight: bold;
        }
        .variable-value {
            color: #27ae60;
            font-weight: bold;
        }
        .variable-formula {
            color: #7f8c8d;
            font-size: 0.9em;
            font-style: italic;
            margin-top: 5px;
            padding-left: 10px;
            border-left: 2px solid #bdc3c7;
        }
        form { 
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #2c3e50;
        }
        input, button { 
            padding: 10px; 
            margin: 5px 0; 
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }
        button {
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
        }
        button:hover {
            background: #2980b9;
        }
        .result-block {
            background: #e8f6f3;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            border-left: 3px solid #27ae60;
        }
        .result-title {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа 3: Основы PHP</h1>

        <!-- Секция 1: Исходные переменные -->
        <div class="section">
            <h2>📋 Исходные переменные</h2>
            
            <div class="variable-block">
                <span class="variable-name">$name</span> = 
                <span class="variable-value">"<?php echo $name; ?>"</span>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">$age</span> = 
                <span class="variable-value"><?php echo $age; ?></span>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">$heightCm</span> = 
                <span class="variable-value"><?php echo $heightCm; ?> см</span>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">$isStudent</span> = 
                <span class="variable-value"><?php echo $isStudent ? 'true' : 'false'; ?></span>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">$grades</span> = 
                <span class="variable-value">[<?php echo implode(', ', $grades); ?>]</span>
            </div>
        </div>

        <!-- Секция 2: Математические операции -->
        <div class="section">
            <h2>🧮 Математические операции</h2>
            
            <div class="variable-block">
                <span class="variable-name">Год рождения:</span> 
                <span class="variable-value"><?php echo $birthYear; ?></span>
                <div class="variable-formula">2024 - $age = 2024 - <?php echo $age; ?></div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Возраст через 5 лет:</span> 
                <span class="variable-value"><?php echo $ageIn5Years; ?></span>
                <div class="variable-formula">$age + 5 = <?php echo $age; ?> + 5</div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Рост в дюймах:</span> 
                <span class="variable-value"><?php echo round($heightInInches, 2); ?> in</span>
                <div class="variable-formula">$heightCm / 2.54 = <?php echo $heightCm; ?> / 2.54</div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Рост в метрах:</span> 
                <span class="variable-value"><?php echo round($heightInMeters, 2); ?> m</span>
                <div class="variable-formula">$heightCm / 100 = <?php echo $heightCm; ?> / 100</div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Средний балл:</span> 
                <span class="variable-value"><?php echo round($averageGrade, 2); ?></span>
                <div class="variable-formula">array_sum($grades) / count($grades) = <?php echo array_sum($grades); ?> / <?php echo count($grades); ?></div>
            </div>
        </div>

        <!-- Секция 3: Операции со строками -->
        <div class="section">
            <h2>🔤 Операции со строками</h2>
            
            <div class="variable-block">
                <span class="variable-name">Приветствие:</span> 
                <span class="variable-value"><?php echo $greeting; ?></span>
                <div class="variable-formula">"Привет, " . $name . "!"</div>
            </div>
        </div>

        <!-- Секция 4: Операции с массивом -->
        <div class="section">
            <h2>📊 Операции с массивом</h2>
            
            <div class="variable-block">
                <span class="variable-name">Количество оценок:</span> 
                <span class="variable-value"><?php echo $gradesCount; ?></span>
                <div class="variable-formula">count($grades) = count([<?php echo implode(', ', $grades); ?>])</div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Максимальная оценка:</span> 
                <span class="variable-value"><?php echo $maxGrade; ?></span>
                <div class="variable-formula">max($grades) = max([<?php echo implode(', ', $grades); ?>])</div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Минимальная оценка:</span> 
                <span class="variable-value"><?php echo $minGrade; ?></span>
                <div class="variable-formula">min($grades) = min([<?php echo implode(', ', $grades); ?>])</div>
            </div>
        </div>

        <!-- Секция 5: Генерация случайных чисел -->
        <div class="section">
            <h2>🎲 Генерация случайных чисел</h2>
            
            <div class="variable-block">
                <span class="variable-name">Случайное целое (1-100):</span> 
                <span class="variable-value"><?php echo $randomInt; ?></span>
                <div class="variable-formula">rand(1, 100)</div>
            </div>
            
            <div class="variable-block">
                <span class="variable-name">Случайное дробное (0.00-1.00):</span> 
                <span class="variable-value"><?php echo $randomFloat; ?></span>
                <div class="variable-formula">rand(0, 100) / 100</div>
            </div>
        </div>

        <!-- Секция 6: Калькулятор -->
        <div class="section">
            <h2>🧮 Калькулятор преобразований</h2>
            
            <form method="POST">
                <label>Введите рост в см:</label>
                <input type="number" name="heightCm" value="<?= $_POST['heightCm'] ?? '' ?>" required>
                
                <label>Введите возраст:</label>
                <input type="number" name="age" value="<?= $_POST['age'] ?? '' ?>" required>
                
                <button type="submit" name="calculate">Рассчитать</button>
            </form>
            
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])): ?>
                <div class="result-block">
                    <div class="result-title">📊 Результаты расчета:</div>
                    <p>Рост в дюймах: <strong><?php echo round($_POST['heightCm'] / 2.54, 2); ?></strong></p>
                    <p>Рост в метрах: <strong><?php echo round($_POST['heightCm'] / 100, 2); ?></strong></p>
                    <p>Год рождения: <strong><?php echo 2024 - $_POST['age']; ?></strong></p>
                    <p>Случайное число: <strong><?php echo rand(1, 100); ?></strong></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>