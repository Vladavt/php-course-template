<?php
include 'header.php';
include 'lab6.fochka/main.php';
include 'footer.php';

$a = 10;
$b = 3.3;
$string1 = 'я дурак!';
$Puck = true;
$pick = false;
$yux = null;
$banana = [1,2,3];

$bb = 17;
$square = $a * $bb;
echo $square;
echo ' ';

$kkk = 'енн';
echo $kkk;
echo ' ';
$p = 3.4;
echo $p;

$arrbyz = [$kkk,$bb,$p,$a,$b,$string1,$Puck,$pick,$yux,$banana];
var_dump ($arrbyz);
$desk = 'парта';
$chair = 'Стул';
$full = $chair . ' ' . $desk . '!';
echo $arrbyz [1];
echo $arrbyz [3];

echo '<br>';

$a1 = rand (1, 100);
$a2 = rand (1, 100);
$a3 = rand (1, 100);
if ($a2 > $a3) {
 echo "$a2 больше $a1";
}else {
echo "$a3 больше $a2";
}
$prices = [];
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);
$prices []= rand (10, 3000);

foreach ($prices as $pr) {
    if ($pr > 2000) {
    echo $pr . '<br>';
    }
}

?>