<?php

class Cylinder
{
    private $radius;
    private $height;

    public function __construct($rad = 1, $hei = 1)
    {
        $this->radius = $rad;
        $this->height = $hei;
    }

    public function get_radius()
    {
        return $this->radius;
    }

    public function volumn()
    {
        return $this->area() * $this->height;
    }

    public function area()
    {
        return $this->radius * $this->radius * 3.1415926;
    }

    public function __get($pro)//魔术方法,自动读取私有属性值
    {
        echo "您试图访问私有属性：";
        return $this->$pro;
    }
    
    public function __set($pro,$val){//魔术方法,自动设置私有属性值
        echo "您在试图设置私有成员属性值"."<br>";
        $this->$pro=$val;
    }
}

$cylind1 = new Cylinder(5, 10);//原有设置值
/*echo $cylind1->area() . "<br>";
echo $cylind1->volumn();*/
//echo "读取对象的属性值为：" . "<br>";
//echo "cylind1的半径为：" . $cylind1->get_radius()
$cylind1->radius=49.5;
$cylind1->height=15.8;
echo $cylind1->radius . "<br>";
echo $cylind1->height;

?>
