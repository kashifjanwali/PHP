<?php 

# Indexed Array:- Arrays with a numeric index
$web_students = array("Kashif Hussain", "Israr Ullah", "Muhammad Saleem", "Tehmoor", "Sohail", "Sumbleen Wasiq", "Nayab Fatima", "Abdur Rehman", "Humayoun", "Urooj Ghufran", "Shehryar Inayat", "Hamza", "Abdus Salam", "Aamna Khalid");

#print_r without formatting
echo "print_r without formatting <br>";
print_r($web_students);

#<pre></pre> tag is used for formatting
echo "<br><br> Indexed Array:- Arrays with a numeric index <pre>";
print_r($web_students);
echo "</pre>";


# Associative Array:- Arrays with named keys
$web_std_1 = array(
"Student Number " => 1,
"Student Name " => "Kashif Hussain",
"Student Area " => "Gilgit Baltistan",
"Studying Area " => "Website Development"
);
echo "<br> Associative Array:- Arrays with named keys <pre>";
print_r($web_std_1);
echo "</pre>";


# Multidimensional arrays:- Arrays containing one or more arrays
$sts = array(
    "std_1" => array(
        "Name " => "Kashif Hussain",
        "Roll No. " => 11,
        "From " => "GB",
        "Studying " => "Web Application Development"
    ),

    "std_2" => array(
        "Name " => "Israr Ullah",
        "Roll No. " => 12,
        "From " => "Balochistan",
        "Studying " => "Web Application Development"
    ),

    "std_3" => array(
        "Name " => "Muhammad Saleem",
        "Roll No. " => 13,
        "From " => "Balochistan",
        "Studying " => "Web Application Development"
    ),

    "std_4" => array(
        "Name " => "Tehmoor",
        "Roll No. " => 14,
        "From " => "KPK",
        "Studying " => "Web Application Development"
    ),

    "std_5" => array(
        "Name " => "Sumbleen Wasiq",
        "Roll No. " => 15,
        "From " => "Punjab",
        "Studying " => "Web Application Development"
    ),

    "std_6" => array(
        "Name " => "Aimen",
        "Roll No. " => 16,
        "From " => "Sindh",
        "Studying " => "Web Application Development"
    ),

    "std_7" => array(
        "Name " => "Ali",
        "Roll No. " => 17,
        "From " => "Kashir",
        "Studying " => "Web Application Development"
    ),
);

echo "<br> Multidimensional arrays:- Arrays containing one or more arrays <pre>";
print_r($sts);
echo "<pre>";

?>