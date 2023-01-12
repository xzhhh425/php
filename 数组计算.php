<?php

$arr=array(20,30,17,55,80,90,66,49,62,71);
echo "求所有元素之和"."<br>";
echo "第一种方法："."<br>";
$sum=0;
for ($i=0;$i<count($arr);$i++)
    $sum+=$arr[$i];
    //echo $arr[$i]."&nbsp";
echo $sum;
echo "<br>";
echo "第二种方法："."<br>";
$sum=0;
foreach ($arr as $value)
    $sum+=$value;
echo $sum;
echo "<br>";
echo "求所有元素的最大值和最大值"."<br>";
$max=$arr[0];
$min=$arr[0];
$sum=0;
echo "第一种方法："."<br>";
foreach ($arr as $value){
    $sum+=$value;
    
    if ($max<$value)
        $max=$value;
    if ($min>$value)
        $min=$value;
}
echo "最大值为：".$max."<br>";
echo "最小值为：".$min."<br>";
echo "和为：".$sum."<br>";
echo "第二种方法："."<br>";
$max=$arr[0];
$min=$arr[0];
$sum=0;
for ($s=0;$s<count($arr);$s++){
    $sum+=$arr[$s];
    if($arr[$s]>$max)
        $max=$arr[$s];
    if($arr[$s]<$min)
        $min=$arr[$s];
}
echo "最大值为：".$max."<br>";
echo "最小值为：".$min."<br>";
echo "和为：".$sum."<br>";
?>