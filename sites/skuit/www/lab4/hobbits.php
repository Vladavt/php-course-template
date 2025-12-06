<h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>

<?php
$hobbits = [
    "Фочка", "Бобо", "Разум", "Голубь", 
    "Анхоли", "Кайзер", "Сквадрон", "Войд",
    "Эл", "Яданя", "Гоша", "Люксери",
    "Хакурей", "Отец Бездны", "Лодаир", "Гречневый Качок"
];

$partySize = rand(2, 5);
shuffle($hobbits);
//Shuffle в PHP — это функция, которая перемешивает элементы массива в случайном порядке.
//Это я себе написал чтоб банально не забыть, спрашивали у коли я записал!
$partyHobbits = array_slice($hobbits, 0, $partySize);
$hobbitsList = implode(", ", $partyHobbits);
$hobbitsCount = count($partyHobbits);
?>

<div class="block">
    В поход отправятся <?php echo $hobbitsCount; ?> хоббитов: <?php echo $hobbitsList; ?><br> 
</div>

<?php
$transports = [
    "Лошадь", "Повозка", "Лодка", 
    "Осел", "Телега", "Нет транспорта"
];

$randomIndex = rand(0, count($transports) - 1);
$transport = $transports[$randomIndex];     
?>

<div class="block">
    <h2> Транспорт:</h2>
    <p>Выбранный транспорт: <?php echo $transport; ?></p>
</div>

<?php

$allSupplies = ["Пиво", "Мёд", "Грибы", "Рыба", "Запасаное колесо", "Ячмень", "Кукуруза", "Волшебное кольцо", "Зелье здоровья"];

$numSupplies = rand(2, 6);
shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, $numSupplies);
?>

<div class="block">
    <h2> Припасы:</h2>
    <ul>
        <?php foreach ($supplies as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php
$nazgulDays = 5;
$delayDays = count($supplies);
?>

<?php
$partyEvents = [
    "{hobbit} потерял свой плащ",
    "Встретили дружелюбных эльфов", 
    "{hobbit} забыл трубку дома",
    "Ночью напали волки",
    "Нашли золотое кольцо",
    "Заблудились в лесу",
    "{hobbit} спел слишком много песен"
];

$numEvents = rand(1, 3);
shuffle($partyEvents);
$events = array_slice($partyEvents, 0, $numEvents);
//foreach в PHP — это конструкция, которая позволяет последовательно перебирать элементы массива. 
//Она работает только с массивами и объектами, с переменными других типов или неинициализированными переменными генерирует ошибку.
//Это я себе написал чтоб банально не забыть, спрашивали у коли я записал!
foreach ($events as &$event) {
    if (strpos($event, '{hobbit}') !== false) {
        $randomHobbit = $partyHobbits[array_rand($partyHobbits)];
        $event = str_replace('{hobbit}', $randomHobbit, $event);
    }
}

$delayDays = count($supplies) + count($events);
?>

<div class="block">
    <h2>📜 События в пути:</h2>
    <ul>
        <?php foreach ($events as $event): ?>
            <li><?php echo $event; ?></li>
        <?php endforeach; ?>
    </ul>
    <p>Всего дней задержки: <?php echo $delayDays; ?> (припасы: <?php echo count($supplies); ?> дней + события: <?php echo count($events); ?> дней)</p>
</div>

<div class="block">
    <h2>Проврека назгулов:</h2>
    <p>Назгулы прибудут через: <?php echo $nazgulDays; ?> дней</p>
    <p>Хоббиты собирались: <?php echo $delayDays; ?> дней</p>
    
    <?php if ($delayDays < $nazgulDays): ?>
        <p>✨ Хоббиты успели выйти в путь раньше назгулов!</p>
    <?php elseif ($delayDays == $nazgulDays): ?>
        <p>✨ Хоббиты успели от назгулов в самый последний момент</p>
    <?php else: ?>
        <p>⚔️ Назгулы настигли хоббитов! Хоббиты слишком долго собирались и опаздали на опоздали на столько дней: <?php echo ($delayDays - $nazgulDays); ?> дней</p>
    <?php endif; ?>
</div>
