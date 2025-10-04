<?php
// Блок PHP

// 1) Создаем массив имен хоббитов
$hobbitNames = [
    "Фродо Бэггинс", "Сэмуайз Гэмджи", "Перегрин Тук", "Мэриадок Брендибак",
    "Бильбо Бэггинс", "Бандобрас Тук", "Лобелия Саквиль-Бэггинс", "Роза Коттон",
    "Хэмфаст Гэмджи", "Белла Гэмджи", "Гортензия Гэмджи", "Одо Тук",
    "Примула Бэггинс", "Дрого Бэггинс", "Эсмеральда Тук", "Сарагорн Брендибак"
];

// 2) Определяем, сколько хоббитов пойдёт в поход (от 2 до 5)
$expeditionCount = rand(2, 5);

shuffle($hobbitNames);
$expeditionMembers = array_slice($hobbitNames, 0, $expeditionCount);

$membersString = implode(", ", $expeditionMembers);


$membersCount = count($expeditionMembers);
?>

<div>
    <h2>Экспедиция хоббитов</h2>
    
    <div class="list">
        <p><strong>Все хоббиты Шира:</strong></p>
        <ul>
            <?php foreach ($hobbitNames as $hobbit): ?>
                <li><?= $hobbit ?></li>
            <?php endforeach; ?>
        </ul>
        
        <p><strong>В поход отправляются <?= $membersCount ?> хоббита:</strong> <?= $membersString ?></p>
    </div>
</div>

<?php
$transports = [
    "Лошадь", 
    "Осел", 
    "Повозка", 
    "Нет транспорта",
    "Пони",
    "Телега",
    "Верхом на орле",
    "На плоту"
];

//Рандом транспорт
$transportIndex = rand(0, count($transports) - 1);
$transport = $transports[$transportIndex];
?>

<div>
    <h2>Транспорт для экспедиции</h2>
    <p><strong>Выбранный транспорт:</strong> <?= $transport ?></p>
</div>

<?php
//Сбор припасов
//Массив возможных припасов 
$possibleSupplies = [
    "Хлеб", "Сыр", "Пивной эль", "Вяленая говядина", 
    "Яблочный пирог", "Трубчатый табак", "Карта Средиземья",
    "Запасные носки", "Фляга с водой", "Одеяло", "Кремень", 
    "Курительная трубка", "Яблоки", "Орехи", "Мед"
];

//Получаем случайные припасы (от 2 до 6)
$suppliesCount = rand(2, 6);
shuffle($possibleSupplies);
$supplies = array_slice($possibleSupplies, 0, $suppliesCount);
?>

<div>
    <h2>Припасы для путешествия</h2>
    <p><strong>Собрано припасов (<?= $suppliesCount ?>):</strong></p>
    <ul class="list">
        <?php foreach ($supplies as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php

$partyEvents = [
    "{hobbit} потерял карту",
    "{hobbit} нашел съедобные грибы",
    "Отряд встретил странствующего торговца",
    "{hobbit} испугался лесных шорохов",
    "Пошел сильный дождь",
    "{hobbit} спел веселую песню",
    "На пути встретилась река",
    "{hobbit} вспомнил, что забыл трубку дома"
];


$delayDays = count($supplies);

$eventsCount = rand(1, 3);
shuffle($partyEvents);
$selectedEvents = array_slice($partyEvents, 0, $eventsCount);

$delayDays += $eventsCount;

$processedEvents = [];
foreach ($selectedEvents as $event) {
    $randomHobbit = $expeditionMembers[array_rand($expeditionMembers)];
    $processedEvent = str_replace("{hobbit}", $randomHobbit, $event);
    $processedEvents[] = $processedEvent;
}
?>

<div>
    <h2>События в пути</h2>
    <p><strong>Произошло событий: <?= $eventsCount ?></strong></p>
    <ul class="list">
        <?php foreach ($processedEvents as $event): ?>
            <li><?= $event ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php
$nazgulDays = 5;
?>

<div>
    <h2>Гонка со временем</h2>
    <p><strong>Назгулы прибудут через:</strong> <?= $nazgulDays ?> дней</p>
    <p><strong>Хоббиты задержались на:</strong> <?= $delayDays ?> дней</p>
    
    <?php
    if ($delayDays < $nazgulDays) {
        echo "<p style='color: green; font-weight: bold;'>✨ Хоббиты успели выйти в путь раньше назгулов!</p>";
    } elseif ($delayDays == $nazgulDays) {
        echo "<p style='color: orange; font-weight: bold;'>✨ Хоббиты успели от назгулов в самый последний момент</p>";
    } else {
        $lateDays = $delayDays - $nazgulDays;
        echo "<p style='color: red; font-weight: bold;'>⚔️ Назгулы настигли хоббитов! Хоббиты слишком долго собирались и опоздали на $lateDays дней</p>";
    }
    ?>
</div>