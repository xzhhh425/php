<?php
echo "数组类型可以任意，元素个数可以任意"."<br>";
echo "元素下标可以是数字或其他的"."<br>";
echo "数字可以不连续"."<br>"
?>
<p></p>
<?php
echo "自动编号"."<br>";
$a =array("13","1364","sdfg");
var_dump($a);
echo "<br>";

echo "手动编号"."<br>";
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota";
$cars[3]="Toydsfdgfha";
var_dump($cars);
echo "<br>";
echo "输出数组中单个元素"."<br>";
$b=array("dasfghj","esrdtfyg","ryfugi","warextuvyubi");
var_dump($b[2]);
echo "<br>";
echo "关联数组"."<br>";
$info=array("name"=>"wangwu","length"=>"175","weight"=>"62");
var_dump($info);
echo "<br>";
echo "初始化数组"."<br>";
$arr=array(2,7,9=>10,20);
var_dump($arr);
echo "<br>";
echo "复合数组"."<br>";
$asd=array(170,165,180,20=>157,"length"=>166,172,180,163);
var_dump($asd);
echo "<br>";
echo "复合数组下标显示"."<br>";
$ccd=array(1,2,3,4,5,6,20=>7,8,9,10,"name"=>"lisi");
foreach ($ccd as $lable=>$value_lable){
    echo $lable."=>".$value_lable."<br>";
}
echo "第一种方法"."<br>";
echo "foreach（数组名 as 键值）"."<br>"."echo 键值;"."<br>";
echo "第二种方法"."<br>";
echo "foreach（数组名 as 键名（下标名）=>键值）"."<br>"."echo 键名 .“=>” 键值;";
?>
<p></p>
<?php
$info =['id' =>1 ,'user'=>'jacie','age'=>18];
foreach ($info as $k => $v){
    echo $k . ':'.$v.' ';
}
