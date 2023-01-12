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

    public function set_radius($rad)
    {
        $this->radius = $rad;
    }

    public function get_xy_radius()
    {
        return $this->radius;
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

$cylind1->set_radius(30);


echo $cylind1->get_xy_radius();
echo "<br>";
echo $cylind1->area();
echo "<br>";
$cylind1->volumn();


$cylind2 = new Cylinder();


?>
