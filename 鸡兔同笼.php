<?php
$ji = 0;
$tu = 0;

while ($ji <= 100) {
    $tu = 100 - $ji;
    if ($ji * 2 + $tu * 4 == 280) {
        echo "鸡：";
        echo $ji;

        echo "兔：";
        echo $tu;
    }
    $ji++;
}