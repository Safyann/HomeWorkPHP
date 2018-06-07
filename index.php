<?php
// Задача 1
$name = 'Алена';
$age = 23;
echo "Меня зовут: $name". "<br>";
echo "Мне $age года". "<br>";
echo '"!|\/'."'".'"'."\\"."<br>";
echo "<br>";

// Задача 2
const DRAWINGS = 80;
const MARKERS = 23;
const PENCILS = 40;
const PAINTS = DRAWINGS - MARKERS - PENCILS;
echo "Нарисовано красками ".PAINTS." картин"."<br>";
echo "<br>";

// Задача 3
$age = rand(1, 100);
echo $age."<br>";
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать"."<br>";
} elseif ($age > 65) {
    echo "Вам пора на пенсию"."<br>";
} elseif ($age < 18) {
    echo "Вам ещё рано работать"."<br>";
} else {
    echo "Неизвестный возраст"."<br>";
}
echo "<br>";

// Задача 4
$day = rand(1, 8);
echo $day."<br>";
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день"."<br>";
        break;
    case 6:
    case 7:
        echo "Это выходной день"."<br>";
        break;
    default:
        echo "Неизвестный день"."<br>";
        break;
};
echo "<br>";

// Задача 5
$bmv = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
];
$toyota = [
    "model" => "RAW4",
    "speed" => 160,
    "doors" => 5,
    "year" => 2017
];
$opel = [
    "model" => "Astra",
    "speed" => 80,
    "doors" => 5,
    "year" => 2013
];
$result = [
    "bmv" => $bmv,
    "toyota" => $toyota,
    "opel" => $opel
];

foreach ($result as $car => $marka) {
    echo "CAR $car"."<br>";
    echo implode(" ", $marka)."<br>";
};
echo "<br>";

//Задача 6
echo "<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\"> ";
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 11; $j++) {
        if ($i%2==0 && $j%2==0) {
            echo "<td align=\"center\">". "(".$i * $j.")"."</td>";
        } elseif ($i%2!=0 && $j%2!=0) {
            echo "<td align=\"center\">"."[".$i * $j."]"."</td>";
        } else {
            echo "<td align=\"center\">".$i * $j."</td>";
        }
    }
    echo "</tr>";
};
echo "</table>";
