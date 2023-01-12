<?php
echo "while循环输出1到10所有数之和：";
$a = 0;
$s = 1;
while ($s <= 10) {
    $a = $a + $s;
    $s++;
}
echo $a;
?>

<?php
echo "for循环输出1到10所有数之和";

$w = 0;
for ($q = 0; $w <= 10; $w += 1) {
    $q += $w;
}
echo $q;
?>