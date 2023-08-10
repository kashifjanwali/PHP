<?php

echo "Example of <strong> abstraction </strong> <hr><br>";
abstract class Calculation
{
    function add($n1, $n2)
    {
        echo "Sum of $n1 & $n2 is _________ ", $n1 + $n2, "<br><br>";
    }

    function sub($n1, $n2)
    {
        echo "Sub of $n1 & $n2 is _________ ", $n1 - $n2, "<br><br>";
    }
    function div($n1, $n2)
    {
        echo "Div of $n1 & $n2 is _________ ", $n1 / $n2, "<br><br>";
    }

    function mul($n1, $n2)
    {
        echo "Mul of $n1 & $n2 is _________ ", $n1 * $n2, "<br><br>";
    }

    function reminder($n1, $n2)
    {
        echo "Reminder of $n1 & $n2 is _____ ", $n1 % $n2, "<br><br>";
    }

}

class Result extends Calculation
{

}

$add1 = new Result();
# Function 1 Calling
$add1->add(10, 1);

# Function 2 Calling
$add1->sub(20, 9);

# Function 3 Calling
$add1->div(15, 5);

# Function 4 Calling
$add1->mul(-3, 5);

# Fuction 5 Calling
$add1->reminder(7, 6);
?>