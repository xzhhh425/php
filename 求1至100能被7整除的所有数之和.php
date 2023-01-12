<?php
echo "求1至100之间所有能被7整除的数之和：";
$su = 0;
$o = 1;
while ($o <= 100) {
    if ($o % 7 == 0)
        $su += $o;
    $o++;
}
echo $su;
?>


