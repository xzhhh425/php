<?php
function nub($num) {
    $sum = 1;
    for ($i = 1; $i <= $num; $i++) {
        $sum *= $i;
    }
    return $sum;
};

echo nub(8)+nub(6)+nub(10);

?>