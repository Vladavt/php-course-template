<h2>Лабораторная работа №6 — Массивы и циклы</h2>

<?php

$p1  = "Цемент М500";          $pr1  = 480;
$p2  = "Песок речной";         $pr2  = 65;
$p3  = "Щебень 20-40";         $pr3  = 120;
$p4  = "Кирпич красный";       $pr4  = 18;
$p5  = "Газоблок D500";        $pr5  = 58;
$p6  = "Профлист С8";          $pr6  = 420;
$p7  = "Металлочерепица";      $pr7  = 680;
$p8  = "Доска обрезная 25мм";  $pr8  = 14500;
$p9  = "Брус 150×150";         $pr9  = 18500;
$p10 = "ОСБ-3 9 мм";           $pr10 = 890;
$p11 = "Гипсокартон 12,5 мм";  $pr11 = 320;
$p12 = "Шпаклёвка финишная";   $pr12 = 480;
$p13 = "Грунтовка глубокая";   $pr13 = 320;
$p14 = "Клей плиточный";       $pr14 = 410;
$p15 = "Сетка штукатурная";    $pr15 = 180;

$products = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15];
$prices   = [$pr1, $pr2, $pr3, $pr4, $pr5, $pr6, $pr7, $pr8, $pr9, $pr10, $pr11, $pr12, $pr13, $pr14, $pr15];
?>

<h3>1. Товары и цены (отдельные массивы)</h3>
<div class="product-list">
    <?php for ($i = 0; $i < count($products); $i++): ?>
        <div class="product-card">
            <div class="product-name"><?= $products[$i] ?></div>
            <div class="product-price"><?= $prices[$i] ?> ₽</div>
        </div>
    <?php endfor; ?>
</div>

<?php

$products2 = [
    "Арматура 12 мм", "Бетон М300", "Рубероид", "Мастика битумная",
    "Утеплитель базальт 100 мм", "Сайдинг виниловый", "Окно ПВХ 1200×1500",
    "Дверь металлическая", "Линолеум", "Плинтус пластиковый"
];

$prices2 = [950, 5200, 380, 420, 1450, 320, 6800, 14500, 890, 120];

$products2[] = $p13;   $prices2[] = $pr13;
$products2[] = $p14;   $prices2[] = $pr14;
$products2[] = $p15;   $prices2[] = $pr15;
?>

<h3>2. Второй набор товаров (с добавлением 3 позиций)</h3>
<div class="product-list">
    <?php for ($i = 0; $i < count($products2); $i++): ?>
        <div class="product-card">
            <div class="product-name"><?= $products2[$i] ?></div>
            <div class="product-price"><?= $prices2[$i] ?> ₽</div>
        </div>
    <?php endfor; ?>
</div>

<?php

$items = [];

$items[] = ["Цемент М400", 420];
$items[] = ["Песок карьерный", 55];
$items[] = ["Кирпич силикатный", 16];
$items[] = ["Газобетон D400", 52];
$items[] = ["Профнастил НС-35", 580];
$items[] = ["Металлочерепица Монтеррей", 720];
$items[] = ["Доска пола 36 мм", 16800];
$items[] = ["Брус строганный 100×100", 15200];
$items[] = ["Фанера 10 мм", 980];
$items[] = ["ГВЛ 10 мм", 680];
?>

<h3>3. Двумерный массив (числовые индексы)</h3>
<div class="product-list">
    <?php foreach ($items as $item): ?>
        <div class="product-card">
            <div class="product-name"><?= $item[0] ?></div>
            <div class="product-price"><?= $item[1] ?> ₽</div>
        </div>
    <?php endforeach; ?>
</div>

<?php

$goods = [];

$goods[] = ["name" => "Цемент М500",        "price" => 480];
$goods[] = ["name" => "Песок речной",       "price" => 65];
$goods[] = ["name" => "Щебень 5-20",        "price" => 140];
$goods[] = ["name" => "Кирпич керамический","price" => 19];
$goods[] = ["name" => "Газоблок D600",      "price" => 62];
$goods[] = ["name" => "Профлист С21",       "price" => 510];
$goods[] = ["name" => "Металлочерепица",    "price" => 690];
$goods[] = ["name" => "Доска 50×150",       "price" => 15800];
$goods[] = ["name" => "Брус 200×200",       "price" => 19800];
$goods[] = ["name" => "ОСБ-3 12 мм",        "price" => 1050];
$goods[] = ["name" => "Гипсокартон 9,5 мм", "price" => 290];
$goods[] = ["name" => "Штукатурка Ротбанд", "price" => 520];
?>

<h3>4. Ассоциативный двумерный массив</h3>
<div class="product-list">
    <?php foreach ($goods as $good): ?>
        <div class="product-card">
            <div class="product-name"><?= $good["name"] ?></div>
            <div class="product-price"><?= $good["price"] ?> ₽</div>
        </div>
    <?php endforeach; ?>
</div>

<?php

$goodsRandom = [];

for ($i = 0; $i < 45; $i++) {
    $idx = array_rand($goods);
    $goodsRandom[] = $goods[$idx];
}
?>

<h3>5. Случайная выборка товаров (<?= count($goodsRandom) ?> шт.)</h3>
<div class="product-list">
    <?php foreach ($goodsRandom as $item): ?>
        <div class="product-card">
            <div class="product-name"><?= $item["name"] ?></div>
            <div class="product-price"><?= $item["price"] ?> ₽</div>
        </div>
    <?php endforeach; ?>
</div>

<?php

?>

<h3>6. Товары дороже 100 ₽</h3>
<div class="product-list">
    <?php foreach ($goodsRandom as $item): ?>
        <?php if ($item["price"] > 100): ?>
            <div class="product-card">
                <div class="product-name"><?= $item["name"] ?></div>
                <div class="product-price"><?= $item["price"] ?> ₽</div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<h3>7. Товары дороже 1000 ₽</h3>
<div class="product-list">
    <?php foreach ($goodsRandom as $item): ?>
        <?php if ($item["price"] > 1000): ?>
            <div class="product-card">
                <div class="product-name"><?= $item["name"] ?></div>
                <div class="product-price"><?= $item["price"] ?> ₽</div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<h3>8. Товары от 100 до 1000 ₽</h3>
<div class="product-list">
    <?php foreach ($goodsRandom as $item): ?>
        <?php if ($item["price"] > 100 && $item["price"] < 1000): ?>
            <div class="product-card">
                <div class="product-name"><?= $item["name"] ?></div>
                <div class="product-price"><?= $item["price"] ?> ₽</div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
