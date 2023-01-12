<?php
fun1();
fun2();
fun3(5);
echo fun4(18.6,10);//两个实际参数，简称实参


function fun1(){         //无参数，无返回值
    echo "##########"."<br>";
    echo "##########"."<br>";
    echo "##########"."<br>";
}
function fun2(){         //无参数，有返回值
    return time();
}
function fun3($num){         //有参数，无返回值
    for($i=1;$i<=$num;$i++){
        echo "&&&&&&&&&&"."<br>";
    }
}
function fun4($num1,$num2){         //有参数，有返回值
    if($num1>$num2) {
        return $num1;
    }else {
        return $num2;
    }
}
?>
<p></p>
<?php
$a=31;
$b=81;
$c=1;
$d=9;
echo fmax(fmax($a,$b),fmax($c,$d));

function fmax($num1,$num2){
    if($num1>$num2) {
        return $num1;
    }else{
        return $num2;
    }
}
?>