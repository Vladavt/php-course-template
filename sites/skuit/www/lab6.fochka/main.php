<?php
// 3. Создание скалярных переменных

// 1) Создаем 15 строковых переменных с названиями товаров
$product1 = "Молоток";
$product2 = "Отвертка";
$product3 = "Гвозди";
$product4 = "Шурупы";
$product5 = "Дрель";
$product6 = "Перфоратор";
$product7 = "Рулетка";
$product8 = "Уровень";
$product9 = "Плоскогубцы";
$product10 = "Ключ гаечный";
$product11 = "Пила";
$product12 = "Стамеска";
$product13 = "Лестница";
$product14 = "Ведро";
$product15 = "Кисть малярная";

// 2) Создаем 15 переменных с ценами
$price1 = 450;
$price2 = 280;
$price3 = 120;
$price4 = 85;
$price5 = 3500;
$price6 = 8900;
$price7 = 560;
$price8 = 1200;
$price9 = 780;
$price10 = 450;
$price11 = 2100;
$price12 = 340;
$price13 = 5300;
$price14 = 290;
$price15 = 180;

// 3) Создаем переменную $products и помещаем в нее все переменные с названиями товаров
$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10, $product11, $product12, $product13, $product14, $product15];

// 4) Создаем переменную $prices и помещаем в нее все переменные с ценами
$prices = [$price1, $price2, $price3, $price4, $price5, $price6, $price7, $price8, $price9, $price10, $price11, $price12, $price13, $price14, $price15];

// 5) Выводим товары и цены
echo "<h2>Товары и цены (скалярные переменные)</h2>";
echo "<div class='product-list'>";
for ($i = 0; $i < count($products); $i++) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $products[$i] . "</div>";
    echo "<div class='product-price'>" . $prices[$i] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

// 4. Создание массивов со значениями

// 1) Создаем массивы $products2 и $prices2 с 10 элементами
$products2 = ["Краска", "Шпатель", "Валик", "Клей", "Пленка", "Провод", "Розетка", "Выключатель", "Лампа", "Патрон"];
$prices2 = [890, 230, 150, 340, 120, 450, 280, 190, 120, 85];

// 2) Добавляем по 3 элемента в каждый массив
$products2[] = $product11;
$products2[] = $product12;
$products2[] = $product13;

$prices2[] = $price11;
$prices2[] = $price12;
$prices2[] = $price13;

// Выводим массивы
echo "<h2>Массивы со значениями</h2>";
echo "<div class='product-list'>";
for ($i = 0; $i < count($products2); $i++) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $products2[$i] . "</div>";
    echo "<div class='product-price'>" . $prices2[$i] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

// 5. Двумерные массивы

// 1) Создаем пустой массив $items и добавляем 10 массивов
$items = [];
$items[] = ["Болт", 25];
$items[] = ["Гайка", 15];
$items[] = ["Шайба", 10];
$items[] = ["Саморез", 8];
$items[] = ["Дюбель", 12];
$items[] = ["Скоба", 45];
$items[] = ["Хомут", 32];
$items[] = ["Петля", 78];
$items[] = ["Замок", 450];
$items[] = ["Ручка", 290];

// 2) Выводим с помощью цикла foreach
echo "<h2>Двумерные массивы</h2>";
echo "<div class='product-list'>";
foreach ($items as $item) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $item[0] . "</div>";
    echo "<div class='product-price'>" . $item[1] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

// 6. Ассоциативные массивы

// Создаем переменную $goods с ассоциативными массивами
$goods = [
    ["name" => "Лобзик", "price" => 3200],
    ["name" => "Фен строительный", "price" => 4500],
    ["name" => "Шлифмашина", "price" => 6700],
    ["name" => "Болгарка", "price" => 8900],
    ["name" => "Шуруповерт", "price" => 5400],
    ["name" => "Топор", "price" => 1200],
    ["name" => "Кувалда", "price" => 2300],
    ["name" => "Ножовка", "price" => 980],
    ["name" => "Рубанок", "price" => 1560],
    ["name" => "Фрезер", "price" => 12800],
    ["name" => "Степлер", "price" => 670],
    ["name" => "Кернер", "price" => 340],
    ["name" => "Напильник", "price" => 290],
    ["name" => "Штангенциркуль", "price" => 1200],
    ["name" => "Микрометр", "price" => 3400]
];

// Выводим ассоциативный массив
echo "<h2>Ассоциативные массивы</h2>";
echo "<div class='product-list'>";
foreach ($goods as $item) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $item["name"] . "</div>";
    echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

// 7. Случайные элементы

// Создаем $goodsRandom с 45 случайными элементами
$goodsRandom = [];
for ($i = 0; $i < 45; $i++) {
    $randomIndex = array_rand($products);
    $goodsRandom[] = [
        "name" => $products[$randomIndex],
        "price" => $prices[$randomIndex]
    ];
}

// Выводим случайные элементы
echo "<h2>Случайные элементы (45 товаров)</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $item["name"] . "</div>";
    echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

// 8. Условия

// Товары дороже 100 рублей
echo "<h2>Товары дороже 100 рублей</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    if ($item["price"] > 100) {
        echo "<div class='product-card'>";
        echo "<div class='product-name'>" . $item["name"] . "</div>";
        echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
        echo "</div>";
    }
}
echo "</div>";

// Товары дороже 1000 рублей
echo "<h2>Товары дороже 1000 рублей</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    if ($item["price"] > 1000) {
        echo "<div class='product-card'>";
        echo "<div class='product-name'>" . $item["name"] . "</div>";
        echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
        echo "</div>";
    }
}
echo "</div>";

// Товары от 100 до 1000 рублей
echo "<h2>Товары от 100 до 1000 рублей</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    if ($item["price"] > 100 && $item["price"] < 1000) {
        echo "<div class='product-card'>";
        echo "<div class='product-name'>" . $item["name"] . "</div>";
        echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
        echo "</div>";
    }
}
echo "</div>";
?>