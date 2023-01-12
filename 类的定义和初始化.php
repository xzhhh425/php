<?php


class Cylinder
{
    public $radius;
    public $height;

    public function __construct($rad = 1, $hei = 1)
    {
        $this->radius = $rad;
        $this->height = $hei;
    }

    public function volumn()
    {
        echo $this->area() * $this->height;
        echo "<br>";
    }

    public function area()
    {
        return $this->radius * $this->radius * 3.1415926;
    }


}

$cylind1 = new Cylinder(10, 10, 5);
$cylind1->radius = 100;
echo $cylind1->area();
echo "<br>";
$cylind1->volumn();


$cylind2 = new Cylinder();


?>
