<?php
function sum($nub1,$nub2){
    $a=0;
    for ($i = $nub1; $i <= $nub2; $i++)
        $a+=$i;
    return $a;
}
echo sum(21,38)+sum(51,79)+sum(81,97);