<?php
$sum = 0;
$arr1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        if ($i == $j)
            $sum += $arr1[$i][$j];
    }
}
echo $sum;
