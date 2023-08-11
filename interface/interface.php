<?php

interface Shape
{
    function getArea();
    function getPerimeter();
}

class Circle implements Shape
{
    private $radius;

    function __construct($r)
    {
        $this->radius = $r;
    }

    function getRadius(){
        return $this->radius;
    }

    function getArea()
    {
        $area = pi() * $this->radius * $this->radius;
        return round($area);
    }

    function getPerimeter()
    {
        $circumference = 2 * pi() * $this->radius;
        return round($circumference);
    }

    function getDiameter()
    {
        $diameter = 2 * $this->radius;
        return round($diameter);
    }
}

class Rectangle implements Shape
{
    private $length, $height;
    function __construct($l, $h)
    {
        $this->length = $l;
        $this->height = $h;
    }

    function getLength() {
        return $this->length;
    }

    function getHeight()
    {
        return $this->height;
    }

    function getArea()
    {
        $area = $this->length * $this->height;
        return round($area);
    }

    function getPerimeter()
    {
        $perimeter = 2 * ($this->length + $this->height);
        return round($perimeter);
    }

    function getDiagonal()
    {
        $diagonal = sqrt($this->length * $this->length + $this->height * $this->height);
        return round($diagonal);
    }
}



$c1 = new Circle(2);
echo "<br>Radius of a Circle:", $c1->getRadius(), "cm<br>";
echo "Diameter of a Circle (2r):", $c1->getDiameter(), "cm<br>";
echo "Area of a circle (&pi;r<sup>2</sup>): ", $c1->getArea(), "cm<sup>2</sup><br>";
echo "Circumference of a circle (2&pi;r): ", $c1->getPerimeter(), "cm<br><hr><hr>";


$r1 = new Rectangle(5, 10);
echo "<br>Length of a rectangle (l): ", $r1->getLength(), "cm<br>";
echo "Height of a rectangle (h): ", $r1->getHeight(), "cm<br>";
echo "Area of a Rectangle (lxh): ", $r1->getArea(), "cm<br>";
echo "Perimeter of a Rectangle 2(l x h): ", $r1->getPerimeter(), "cm<sup>2</sup><br>";
echo "Diadonal Length (&Sqrt; l<sup>2</sup> + h<sup>2</sup>): ", $r1->getDiagonal(), "cm<br><hr><hr>";

?>