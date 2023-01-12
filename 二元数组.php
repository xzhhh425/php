<?php
$arr1=array(1,2,3,4,5,6,7,8,9,10);
$arr2=array(11,12,13,14,15,16,17,18,19,20);
$arr3=array(21,22,23,24,25,26,27,28,29,30);
$arr_1=array($arr1,$arr2,$arr3);
$arr_2=array(array(1,2,3),
    array(4,5,6),
    array(7,8,9,10,11,12,13,14,15,16,17),
    array());
$arr_3=array(array(100,101),
    $arr3,
    array(200,201,202));
echo "<pre>";
print_r($arr_1);
echo "</pre>";
echo $arr_1[2][3];
echo "<br>";
$arr_2=array(array(1,2),
    array(3,4));

echo "<pre>";
print_r($arr_2);
echo "</pre>";
echo "<br>";
echo $arr_2[1][1];
echo "<br>";
echo "<pre>";
print_r($arr_3);
echo "</pre>";
echo $arr_3[1][1];

