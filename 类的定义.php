<?php
//类的定义    类的属性    描述一个对象的特征     类的方法：描述一个对象的功能的
/*
class 类名
{
   类的成员属性
   类的成员方法
}  */

class Student
{
    public $name;
    public $age;
    public $address;
    public $No;

    public function read()
    {
        echo "认真读书!";
    }

    public function exam()
    {
        echo "好好考试!";
    }

    public function play()
    {
        echo $this->name . " 尽情玩耍！";
        echo "<br>";
    }
}


//对象的定义
$stu1 = new Student();

$stu1->No = "00001";
$stu1->address = "qingyuan";
$stu1->age = 20;
$stu1->name = "李艳霞";
$stu1->play();
$stu1->read();

echo "<pre>";
print_r($stu1);
echo "</pre>";

$stu2 = new Student();
print_r($stu2);
?>
