<?php
$arr = array(
    array(30, 40, 9, 86, 21),
    array(18, 45, 57, 6, 59),
    array(88, 72, 65, 107, 4)
);

echo "<pre>";
print_r($arr);
echo "</pre>" . "<br>";

echo "第一种方法：通过for语句来实现" . "<br>";

$sum = 0;
$max = $arr[0][0];
$min = $arr[0][0];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $sum += $arr[$i][$j];
        if ($arr[$i][$j] > $max)
            $max = $arr[$i][$j];
        if ($arr[$i][$j] < $min)
            $min = $arr[$i][$j];
    }
}

echo "最大值为：" . $max . "<br>";
echo "最小值为：" . $min . "<br>";
echo "和为：" . $sum . "<br>" . "<br>";

echo "第二种方法：通过foreach语句来实现" . "<br>";

$sum1 = 0;
$max1 = $arr[0][0];
$min1 = $arr[0][0];

foreach ($arr as $col) {
    foreach ($col as $row) {
        $sum1 += $row;
        if ($row > $max1)
            $max1 = $row;
        if ($row < $min1)
            $min1 = $row;
    }
}

echo "最大值为：" . $max1 . "<br>";
echo "最小值为：" . $min1 . "<br>";
echo "和为：" . $sum1 . "<br>";
