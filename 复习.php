<?php
echo "初始分一个一维数组，数组元素的个数为10个，数据元素的类型为整型，求数组的最大值   最小值  以及所有数组元素之和" . "<br>";
echo "<br>";

$arr1 = array(10, 30, 100, 6, 7, 5, 88, 36, 51, 72);
$max = $arr1[0];
$min = $arr1[0];
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    if ($arr1[$i] > $max)
        $max = $arr1[$i];
    if ($arr1[$i] < $min)
        $min = $arr1[$i];
    $sum += $arr1[$i];
}

echo "最大值为：" . $max . "<br>";
echo "最小值为：" . $min . "<br>";
echo "和为：" . $sum . "<br>";

echo "<br>";
echo "初始分一个3行5列的二维数组，数据元素的类型为整型，求数组的最大值   最小值  以及所有数组元素之和" . "<br>";
echo "<br>";
$arr2 = array(
    array(10, 20, 5, 8, 100),
    array(102, 62, 66, 72, 1),
    array(39, 42, 61, 53, 87));
$max1 = $arr2[0][0];
$min1 = $arr2[0][0];
$sum1 = 0;
foreach ($arr2 as $z) {
    foreach ($z as $d) {
        if ($d > $max1)
            $max1 = $d;
        if ($d < $min1)
            $min1 = $d;
        $sum1 += $d;
    }
}
echo "最大值为：" . $max1 . "<br>";
echo "最小值为：" . $min1 . "<br>";
echo "和为：" . $sum1 . "<br>";


echo "<br>";
$arr3_month = array("一月：" => 31, "二月：" => 28, "三月：" => 31, "四月：" => 30, "五月：" => 31, "六月：" => 30, "七月：" => 31, "八月：" => 31, "九月：" => 30, "十月：" => 31, "十一月：" => 30, "十二月：" => 31);
foreach ($arr3_month as $key => $value) {
    echo $key . $value . "<b4r>";
}

echo "<br>";

$arr3 = array(1, 2, 3, 4, 'a');
echo count($arr3) . "<br>";

echo "<br>";

$arr4 = array(
    array(1),
    array(2, 3),
    array(4, 5, 6),
    array(7, 8, 9, 10));

for ($i = 0; $i < count($arr4); $i++) {
    for ($j = 0; $j < count($arr4[$i]); $j++) {
        {
            echo $arr4[$i][$j] . "&nbsp";
        }
    }
    echo "<br>";
}
echo "<br>";

$score = 100;
if ($score >= 90) {
    echo "优秀";
} else if ($score >= 70) {
    echo "良好";
} else if ($score >= 60) {
    echo "及格";
} else {
    echo "差";
}
echo "<br>";
echo "<br>";
$score1 = 100;
if ($score1 >= 70) {
    if ($score1 >= 80) {
        if ($score1 >= 90) {
            echo "优秀";
        } else {
            echo "良好";
        }
    } else {
        echo "中";
    }
} else {
    if ($score1 >= 60) {
        echo "及格";
    } else {
        if ($score1 >= 40) {
            echo "不及格";
        } else {
            echo "差";
        }
    }
}
