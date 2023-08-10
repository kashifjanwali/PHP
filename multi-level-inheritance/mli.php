<?php
class Human
{
    public $name;
    function __construct($n)
    {
        $this->name = $n;
    }

    function walk()
    {
        return "Humans can walk";
    }

    function show_class()
    {
        return __CLASS__;
    }
}

class Male extends Human
{
    public $age;
    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }


    function walk()
    {
        return "Humans can walk";
    }

    function climb()
    {
        return "Males can climb";
    }

    function show_class()
    {
        return __CLASS__;
    }
}

class Soldier extends Male
{
    public $rank;
    function __construct($n, $a, $r)
    {
        $this->name = $n;
        $this->age = $a;
        $this->rank = $r;
    }

    function duty()
    {
        return "We protect you";
    }

    function show_class()
    {
        return __CLASS__;
    }
}


# Parent Object
$h1 = new Human("John Due");
echo "Parent Class Name: ", $h1->show_class(), "<br>------------------------<br><li>Human Name: $h1->name </li><br><li>Human's Function: ", $h1->walk(), "</li><hr>";

# Child Object
$m1 = new Male("Micheal", 25);
echo "<br><br>Child Class Name: ", $m1->show_class(), "<br>----------------------<br><li>Male Name: $m1->name </li><br><li>Age: $m1->age </li><br><li>Human's Function (inherited from Parent Class): ", $m1->walk(), "</li><br><li>Males Function: ", $m1->climb(), "</li><hr>";

# Child of Male Class
$s1 = new Soldier("David", 28, "Captain");
echo "<br><br>Grand Child Class Name: ", $s1->show_class(), "<br>-------------------------------<br><li>Soldier's Name: $s1->name </li><br><li>Age: $s1->age </li><br><li>Human's Function (inherited from Grand-Parent Class): ", $s1->walk(), "</li><br><li>Males Function (inherited from Parent Class): ", $s1->climb(), "</li><br><li>Soldier's Function: ", $s1->duty(), "</li><hr>";
?>