<?php
# variables
$var_1 = "I'm Variable in php <br>";
# print $var_1 using echo
echo "This output is using <strong>echo</strong> keyword in PHP: <br>", $var_1;

$var_2 = "$ sign in before my actual name is used in PHP to initialize a variable name. <br>";
# print $var_1 using print
print("<br>This output is using <strong>print()</strong> keyword in PHP <br>".$var_2);


define("wc_note", "Welcome to KJW Coding");
define("WC_NOTE", "Welcome to my Coding");

print('<br><br>define("wc_note", "Welcome to KJW Coding");
<br>define("WC_NOTE", "Welcome to my Coding");');
echo "<br><br>", wc_note, "<br>", WC_NOTE;
?>