<?php
if (!function_exists('dd')) {
    function dd()
    {
        echo '<pre>';
        array_map(function($x) {var_dump($x);}, func_get_args());
        echo '</pre>';
        die;
    }
}

if (!function_exists('printArray')) {
    function printArray(array $a): void
    {
        echo "[<br>";
        foreach ($a as $key => $value) {
            echo "&nbsp&nbsp&nbsp&nbsp[$key] => $value<br>";
        }
        echo "]<br>";
    }
}