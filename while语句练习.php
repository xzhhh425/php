<?php
echo "求1到10之间所有的偶数之和：";
echo "方法一：";
$i = 0;
$sum = 0;
while ($i <= 10) {
    $sum += $i;
    $i += 2;
}
echo $sum;
?>

<?php
echo "求1到10之间所有的偶数之和：";
echo "方法二：";
$i = 0;
$sum = 0;
while ($i <= 10) {
    if ($i % 2 == 0)
        $sum += $i;
    $i++;
}
echo $sum;
?>

<?php
echo "求1至10之间所有能被3整除的数之和：";
$su = 0;
$o = 1;
while ($o <= 10) {
    $su += $o;
    $o += 3;
}
echo $su;
?>

<?php
echo "求1至10之间所有不能被3整除的数之和：";
$s = 0;
$k = 0;
while ($k <= 10) {
    if ($k % 3 != 0)
        $s += $k;
    $k++;
}
echo $s;
?>

<?php
echo "求1到10之间所有的奇数之和：";
echo "方法一：";
$eq = 0;
$w = 1;
while ($w <= 10) {
    $eq += $w;
    $w += 2;
}
echo $eq;
?>

<?php
echo "求1到10之间所有的奇数之和：";
echo "方法二：";
$eq = 0;
$w = 0;
while ($w <= 10) {
    if ($w % 2 != 0)
        $eq += $w;
    $w++;
}
echo $eq;
?>
