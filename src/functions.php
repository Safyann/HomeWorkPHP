<?php
function task1(array $array, $bool = false)
{
    foreach ($array as $key => $value) {
        if ($bool === true) {
            return implode(" ", $array);
        } else {
            echo "<p>".$value."</p>";
        }
    }
}
