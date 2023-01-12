<?php

class Cylinder
{
    public $height = 10;
    public $radius = 5;

    public function area()
    {
        echo $this->radius * $this->radius * 3.1415926;
    }

    public function volumn()
    {
        echo $this->radius * $this->radius * 3.1415926 * $this->height;
    }

    public function volumn1()
    {
        return $this->area1() * $this->height;
    }

    public function area1()
    {
        return $this->radius * $this->radius * 3.1415926;
    }
    
    public function get_xy_radius(){
        return $this->radius;
    }
}

$cylind1 = new Cylinder();
$cylind1->radius = 10;
$cylind1->height = 100;
$cylind1->area();
echo "<br>";
$cylind1->volumn();

echo "<br>";
echo "<br>";

$cylind2 = new Cylinder();
echo $cylind2->area();
echo "<br>";
echo $cylind2->volumn();

echo "<br>";
echo "<br>";

$cylind3 = new Cylinder();
echo $cylind3->area1();
echo "<br>";
echo $cylind3->volumn1();

?>

