<?php
$product1 = "Молоток";
$product2 = "Монтировка";
$product3 = "Доска";
$product4 = "Краска";
$product5 = "Кисть";
$product6 = "Шурупы";
$product7 = "Дрель";
$product8 = "Перчатки";
$product9 = "Лестница";
$product10 = "Цемент";
$product11 = "Песок";
$product12 = "Плитка";
$product13 = "Обои";
$product14 = "Лом";
$product15 = "Рулетка 100м";

$price1 = 450;
$price2 = 260;
$price3 = 890;
$price4 = 670;
$price5 = 230;
$price6 = 180;
$price7 = 3500;
$price8 = 340;
$price9 = 4200;
$price10 = 560;
$price11 = 780;
$price12 = 1200;
$price13 = 950;
$price14 = 420;
$price15 = 1090;

$products = [$product1, $product2, $product3, $product4, $product5, 
             $product6, $product7, $product8, $product9, $product10,
             $product11, $product12, $product13, $product14, $product15];

$prices = [$price1, $price2, $price3, $price4, $price5,
           $price6, $price7, $price8, $price9, $price10,
           $price11, $price12, $price13, $price14, $price15];
?>

<div class="product-list">
    <h2> Товары и цены 1 📋 </h3>

    <?php for ($i = 0 ; $i < count($products); $i++) { ?>
       <div class="product-card">
         <div class="$product-name"><?= $products[$i]?></div>
         <div class="$product-price"><?= $prices [$i]?> ₽ </div>
      </div>
    <?php } ?>
</div>

<?php
$products2 = ["Кирпич", "Шпатлевка", "Валик", "Уровень", "Плиткорез", 
              "Шпатель", "Молоток", "Клещи", "Болгарка", "Перфоратор"];

$prices2 = [45, 340, 120, 780, 1500, 230, 450, 560, 4200, 5800];

$products2[] = $product11; // Песок
$products2[] = $product12; // Плитка
$products2[] = $product13; // Обои

$prices2[] = $price11; // 780
$prices2[] = $price12; // 1200
$prices2[] = $price13; // 950
?>

<div class="product-list">
    <h2> Товары и цены 2 📋 </h3>

    <?php for ($i = 0 ; $i < count($products2); $i++) { ?>
       <div class="product-card">
         <div class="$product-name"><?= $products2[$i]?></div>
         <div class="$product-price"><?= $prices2 [$i]?> ₽ </div>
      </div>
    <?php } ?>
</div>

<?php
$items = [];
$items[] = ["Брус", 1200];
$items[] = ["Фанера", 890];
$items[] = ["Гипсокартон", 670];
$items[] = ["Утеплитель", 450];
$items[] = ["Пленка", 230];
$items[] = ["Профнастил", 950];
$items[] = ["Металлочерепица", 1200];
$items[] = ["Саморезы", 180];
$items[] = ["Дюбели", 150];
$items[] = ["Сетка", 340];
?>

<div class="product-list">
<h2>Товары и цены 3 📋</h2>
    <?php foreach ($items as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item[0] ?></div>
            <div class="product-price"><?= $item[1] ?> ₽</div>
        </div>
    <?php } ?>
</div>

<?php
// Двумерный массив - это массив массивов, структура данных в виде таблицы с строками и столбцами.
//Списки товаров и цен - логичнее использовать один объединенный список (например, List<Tuple<string, decimal>> или класс Product), так как это сохраняет связь между товаром и его ценой, предотвращает рассинхронизацию и упрощает обработку данных.
//foreach - это конструкция для итерации по коллекциям. Она автоматически:
//Перебирает все элементы
//Не требует счетчика
//Работает с любыми перечислимыми коллекциями
//Читается проще чем for
// как пример: foreach (var item in collection) {  на другой строке}