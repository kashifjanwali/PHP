<?php
echo "<h1>Warning</h1>
Defining case-insensitive constants is deprecated as of <strong>
PHP 7.3.0.</strong> As of <strong>PHP 8.0.0</strong>, only <em>false</em> is an acceptable value, passing true will produce a warning.<br><hr><br>";


define("name", "kashif", true);
echo "name: ", name, "<br><br>";


define("NAME", "KASHIF");
echo "NAME: ", NAME, "<br><br>";


define("Name", "Kashif");
echo "Name: ", Name, "<br><br>";


define("NaMe", "KaShIf");
echo "NaMe: ", NaMe, "<br><br>";


define("nAmE", "kAsHiF");
echo "nAmE: ", nAmE, "<br><br>";


define("namE", "kashiF");
echo "namE: ", namE, "<br><br>";
?>