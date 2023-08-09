<?php
echo "Classes, Objects, Inheriance <hr>";

class Parentt
{
    public $name, $from;

    function __construct($n, $f)
    {
        $this->name = $n;
        $this->from = $f;
    }

    function talk()
    {
        return "We all can talk";
    }
}

class Childd extends Parentt
{
    public $age, $studying;
    function __construct($n, $a, $f, $std)
    {
        $this->name = $n;
        $this->age = $a;
        $this->studying = $std;
        $this->from = $f;
    }
}

// object 1
$p1 = new Parentt("Muhammad Ali", "Punjab");
echo "<br>Father's Name: $p1->name <br>From: $p1->from <br> user-defined method: ", $p1->talk(), "<br>";

// object 2
$p2 = new Parentt("Soniya Murad", "Peshawar");
echo "<br>Mother's Name: $p2->name <br> From: $p2->from <br>user-defined method: ", $p1->talk(), "<br>";

// object 3
$c1 = new Childd("Tabassum", 19, "Islamabad", "Computer Engineering");
echo "<br>Child Name: $c1->name <br>From: $c1->from <br>Age: $c1->age <br>Studying: $c1->studying <br>user-defined method: ", $p1->talk(), "<br>";

// object 4
$c2 = new Childd("Anjum", 21, "Islamabad", "Artificial Intelligence");

// Using backticks with echo is not working, and it is also not showing any errors. below is the example.
echo `<br>Child Name: $c2->name <br> Age: $c2->age <br>From: $c2->from <br>Studying: $c2->studying`;

echo "<br>Child Name: $c2->name <br> Age: $c2->age <br>From: $c2->from <br>Studying: $c2->studying <br>user-defined method: ", $p1->talk(), "<br>";
?>