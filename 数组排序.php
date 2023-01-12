<?php
echo "冒泡法排序"."<br>";
echo "未排序"."<br>";
$arr=array(8,9,20,4,50,60,70,11,13,17);
for($i=0;$i<count($arr);$i++)
    echo $arr[$i]."&nbsp";
$sum=0;
for($i=0;$i<count($arr)-1;$i++){
    if ($arr[$i]>$arr[$i+1]){
        $temp=$arr[$i];
        $arr[$i]=$arr[$i+1];
        $arr[$i+1]=$temp;
    }
    $sum++;
}
for($i=0;$i<count($arr)-2;$i++){
    if ($arr[$i]>$arr[$i+1]){
        $temp=$arr[$i];
        $arr[$i]=$arr[$i+1];
        $arr[$i+1]=$temp;
    }
    $sum++;
}
for($i=0;$i<count($arr)-3;$i++){
    if ($arr[$i]>$arr[$i+1]){
        $temp=$arr[$i];
        $arr[$i]=$arr[$i+1];
        $arr[$i+1]=$temp;
    }
    $sum++;
}
for($i=0;$i<count($arr)-4;$i++){
    if ($arr[$i]>$arr[$i+1]){
        $temp=$arr[$i];
        $arr[$i]=$arr[$i+1];
        $arr[$i+1]=$temp;
    }
    $sum++;
}

echo "<br>";
echo "已排序"."<br>";
echo "排序次数：".$sum."<br>";
for($i=0;$i<count($arr);$i++)
    echo $arr[$i]."&nbsp";
?>
<p></p>
