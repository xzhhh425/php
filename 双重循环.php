<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= 12; $j++) {
        if ($j >= 10)
            echo $i . $j . "&nbsp";
        else
            echo $i . "0" . $j . "&nbsp";
    }
    echo "<br>";
}
?>
    <p></p>
<?php
echo "输出100以内的所有素数";
echo "<br>";
echo "第一种解决方法";
echo "<br>";
echo "<br>";
echo "解决思路：" . "<br>" . "外循环从2循环到100" . "<br>" .
    "内循环从2循环到当前外循环数，统计外循环除内循环能整除的次数，如果次数为1，则此数为素数" . "<br>";
echo "<br>";
$count_circle = 0;
for ($i = 2; $i <= 100; $i++) {
    for ($count = 0, $j = 2; $j <= $i; $j++) {
        $count_circle++;
        if ($i % $j == 0) {
            $count++;
        }
    }
    if ($count == 1)
        echo $i . "&nbsp";
}
echo "<br>";
echo "循环次数：" . $count_circle;
?>
    <p></p>
<?php
echo "输出100以内的所有素数";
echo "<br>";
echo "第二种解决方法";
echo "<br>";
echo "<br>";
echo "解决思路：" . "<br>";
echo "外循环除内循环;如能整除，内循环立马break 退出内循环" . "<br>";
echo "退出内循环时我们来进行判断，外循环和内循环是否相等，如果相等，刚判断此数为素数" . "<br>";
echo "<br>";
//为什么 ：外循环和内循环是否相等，就可以判断此数为素数呢

$count_circle = 0;
for ($i = 2; $i <= 100; $i++) {
    for ($count = 0, $j = 2; $j <= $i; $j++) {
        $count_circle++;
        if ($i % $j == 0) {
            break;
        }
    }
    if ($i == $j)
        echo $i . "&nbsp";
}
echo "<br>";
echo "循环次数：" . $count_circle;
?>
    <P></P>
<?php
echo "输出100以内的所有素数";
echo "<br>";
echo "第三种解决方法";
echo "<br>";
echo "<br>";
echo "思路：" . "<br>";
echo "沿用第一种办法，内循环无需循环至外循环变量处；" .
    "只需要循环至外循环的平方根处即可。判断此数是否为素数";
echo "<br>";
echo "<br>";

$count_circle = 0;
for ($i = 2; $i <= 100; $i++) {
    for ($count = 0, $j = 2; $j <= sqrt($i); $j++) {
        $count_circle++;
        if ($i % $j == 0)
            $count++;
    }
    if ($count == 0)
        echo $i . "&nbsp";
}
echo "<br>";
echo "循环次数：" . $count_circle;
?>
    <p></p>
<?php
echo "输出100以内的所有素数";
echo "<br>";
echo "第四种解决方法";
echo "<br>";
echo "<br>";
echo "思路：" . "<br>";
echo "内循环只需循环至外循环当前变量的平方根处；" .
    "如果能整除，即退出内循环，来个适当的判断，就可以判断此数是否为素数";
echo "<br>";
echo "<br>";

$count_circle = 0;
for ($i = 2; $i <= 100; $i++) {
    for ($j = 2; $j <= sqrt($i); $j++) {
        $count_circle++;
        if ($i % $j == 0) {
            break;
        }
    }
    if ($j == 1 + floor(sqrt($i)))
        echo $i . "&nbsp";
}
echo "<br>";
echo "循环次数：" . $count_circle;
?>