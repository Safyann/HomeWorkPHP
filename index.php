<?php
require "src/functions.php";

echo "Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе"."<br>";
echo task1([0 => "Hello", 1=> "World", 2 => "from Alena"], true);
echo '<br>';

echo "Функция-калькулятор"."<br>";
task2("+", 1, 2, 3, 4);
echo '<br>';

echo "Функция отображает таблицу"."<br>";
task3(4, 7);
echo '<br>';

echo "Функция выводит информацию о дате"."<br>";
task4();
echo '<br>';

echo "Функция замены в строке"."<br>";
task5();
echo '<br>';

echo "Функция по работе с файлами"."<br>";
task6();
task7('test.txt');
