<?php
function task1(array $array, $bool = false)
{
    foreach ($array as $value) {
        echo "<p>".$value."</p>";
    }
    if ($bool) {
        return implode(" ", $array)."<br>";
    }
}

function task2($str)
{
    if (is_string($str)) {
        if (in_array($str, array('-', '+', '/', '*'))) {
            $arr = func_get_args();
            $znak = $arr[0];
            array_shift($arr);
            calculator($arr, $znak);
        } else {
            echo 'Первый аргумент не является знаком: - + / *'.'<br>';
        }
    } else {
        echo 'Первый аргумент не строка'.'<br>';
    }
}

function calculator($arr, $calc)
{
    echo implode($calc, $arr).' = ';
    $count = 0;
    foreach ($arr as $key => $item) {
        if ($key > 0) {
            switch ($calc) {
                case '-':
                    $count -= $item;
                    break;
                case '+':
                    $count += $item;
                    break;
                case '*':
                    $count *= $item;
                    break;
                case '/':
                    $count /= $item;
                    break;
            }
        } else {
            $count = $item;
        }
    }
    echo $count.'<br>';
}

function task3($a, $b)
{
    if (gettype($a) == 'integer' and gettype($b) == 'integer') {
        $table = '';
        $table .= '<table border="1" cellpadding="7" cellspacing="0">';
        for ($i = 1; $i <= $a; $i++) {
            $table .= '<tr>';
            for ($j = 1; $j <= $b; $j++) {
                $table .= '<td align="center">';
                $table .= $j*$i;
                $table .= '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
        echo $table;
    } else {
        echo 'Ошибка, только челые числа';
    }
}

function task4()
{
    echo date('d.m.Y H:i').'<br>';
    echo strtotime('24.02.2016 00:00:00').'<br>';
}

function task5()
{
    $str = 'Карл у Клары украл Кораллы';
    $result =  str_replace('К', '', $str);
    echo $result.'<br>';
    $str = 'Две бутылки лимонада';
    $result =  str_replace('Две', 'Три', $str);
    echo $result.'<br>';
}

function task6()
{
    $text = 'Hello again!';
    $fp = fopen('test.txt', 'w');
    fwrite($fp, $text);
    fclose($fp);
}

function task7($fileName)
{
    readfile($fileName);
}
