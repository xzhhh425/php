<?php

class Cylinder
{
    //成员属性：定义了类的基本特征     类实例化对象之后，该对象具有的基本特征
    //成员方法：定义了类的基本形为     类实例化对象之后，该对象具有的形为

    public $height = 10;
    public $radius = 5;


    public function __construct($rad = 1, $hei = 1)   //  构造函数的作用是初始化成员属性
    {

        $this->radius = $rad;
        $this->height = $hei;
        echo "自动执行了此方法！";
    }

    public function volumn()
    {
        //return $this->radius*$this->radius*3.1415926*$this->height;
        return $this->area() * $this->height;
    }

    public function area()
    {
        return $this->radius * $this->radius * 3.1415926;
    }
}

$cylind1 = new Cylinder();
$cylind1->radius = 10;
$cylind1->height = 100;
echo $cylind1->area();
echo "<br>";
echo $cylind1->volumn();
echo "<br>";


$cylind2 = new Cylinder();
echo $cylind2->area();
echo "<br>";
echo $cylind2->volumn();

$cylind3 = new Cylinder(5, 5);
echo $cylind3->area();
echo "<br>";
echo $cylind3->volumn();
?>
