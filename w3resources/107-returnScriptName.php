<?php 

$var = basename(__FILE__, '.php');
echo $var;
//Using magical constants
echo "<br/>" . basename(__FILE__);
echo "<br/>In the directory: " . basename(__DIR__) . '.';
echo "<br/><hr>";
//Using PHP_Self
echo "And one more solution could be: ";
echo basename($_SERVER['PHP_SELF']) . '.';
echo "<br/><hr>";
//Using Script_Name
echo "And one more solution could be: ";
echo basename($_SERVER['SCRIPT_NAME']) . '.';
//Using Script_Name
echo "<br>And one more solution could be: ";
echo basename($_SERVER['SCRIPT_FILENAME']) . '.';
?>