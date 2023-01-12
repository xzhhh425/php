<?php
$arra=array(100,6,120,7,19,30,80,45,27,72);
for($q=0;$q<count($arra);$q++)
    echo $arra[$q]."&nbsp";
for($e=1;$e<count($arra);$e++){
    for ($r=0;$r<count($arra)-$e;$r++){
        if($arra[$r]<$arra[$r+1]){
            $temp=$arra[$r];
            $arra[$r]=$arra[$r+1];
            $arra[$r+1]=$temp;
        }
    }
}
echo "<br>";
echo "第一种方法：";
echo "<br>";
for ($w=0;$w<count($arra);$w++)
    echo $arra[$w]."&nbsp";
echo "<br>";
echo "第二种方法：";
echo "<br>";
for ($i=0;$i<count($arra);$i++)
    echo $arra[$i]."&nbsp";
for ($l=0;$l<count($arra);$l++){
    $max=0;
    for ($z=0;$z<count($arra);$z++){
        if($arra[$z]>$arra[$max])
            $max=$z;
    }
    $temp=$arra[$max];
    $arra[$max]=$arra[$z-1];
    $arra[$z-1]=$temp;
}