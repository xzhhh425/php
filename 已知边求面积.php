<?php
function mian($a,$b,$c){
    $P=($a+$b+$c)/2;
    $S=sqrt($P*($P-$a)*($P-$b)*($P-$c));
    return $S;
}

echo mian(5,4.2,6.5)+mian(6.5,3.5,5.8)+mian(5.8,2.9,3.4);
?>
<P></P>
<?php
$a=10;
$b=30;
function sa($a,$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}

sa($a,$b);
echo $a."&nbsp".$b;
?>
<P></P>
<?php
$a=10;
$b=30;
function saa(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}

saa($a,$b);
echo $a."&nbsp".$b;
?>
<p></p>
<?php
function sum($a,$b){ 
    return $a+$b;
}
function see($a,$b){
    return (sum($a,$b))/2;
}
echo see(10,8);