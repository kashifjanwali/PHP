<?php
# Array (Indexed Array)
$friends = array("Kashif", "Hussain", "Ali", "Muhammad", "Karamat");
print_r($friends);

$arr = ["Kashif", "Hussain", "Abdullah", "Ahmed"];
echo "<pre>";
print_r($arr);
echo "</pre> <br>";


# Array (Associative Aray)
$frnd1 = array(
    "Name: " => "Kashif Hussain",
    "Father Name: " => "Jan Wali Khan",
    "From: " => "Gilgit Baltistan",
    "Lives in " => "Rawalpindi - Punjab",
    "Studying " => "Web Application Development",
    "Status: " => "Single"
);


echo "Array Type: Associative Array <br>";
echo "Array Length: ", count($frnd1), "<br>";
echo "<pre>";
print_r($frnd1);
echo "</pre>";


// Array (Multidimensional Array)
$friends_list = array(
    "Friend_1" => array(
        "Name" => "Karamat",
        "From" => "Nzb",
        "lives in" => "Glt",
        "Studying" => "Medical"
    ),

    "Friend_2" => array(
        "Name" => "Yasir",
        "From" => "Thoi",
        "lives in" => "Isl",
        "Studying" => "BSCE"
    )
    );

    echo "Array Type: Multidimensional Array <br>", count($friends_list), "<br> <pre>";
    print_r($friends_list);
    echo "</pre>";
 
?>