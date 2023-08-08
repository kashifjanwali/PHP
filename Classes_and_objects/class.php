<?php
class Friends
{
    public $name, $location, $age;

    // Special Method
    function __construct($x, $y, $z = 21)
    {
        $this->name = $x;
        $this->location = $y;
        $this->age = $z;
    }

    // User Defined Merthod
    function msg()
    {
        return "Hum Sub Bhai Bhai Hain";
    }
}

$p1 = new Friends("Kashif Hussain", "Rawalpindi", 23);
echo "Name: ", $p1->name, "<br>", "Address: ", $p1->location, "<br>", "Age: ", $p1->age, "<br>", "message: ", $p1->msg(), "<br>__________________________________<br><br><br>";


$p2 = new Friends("Kamran Hussain", "Masher", 20);
echo "Name: ", $p2->name, "<br>", "Address: ", $p2->location, "<br>", "Age: ", $p2->age, "<br>", "Message: ", $p2->msg(), "<br>__________________________________<br><br><br>";


$p3 = new Friends("Karamat Ali", "Gilgit");
echo "Name: ", $p3->name, "<br>", "Address: ", $p3->location, "<br>", "Age: ", $p3->age, "<br>", "Message: ", $p3->msg(), "<br>__________________________________<br><br><br>";

?>