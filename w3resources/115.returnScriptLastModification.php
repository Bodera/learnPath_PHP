<?php 

$current_file_name = basename($_SERVER['PHP_SELF']);

echo $current_file_name."</br>";

$file_last_modified = filemtime($current_file_name);

echo 'Last modified '.date("l, dS, F, Y, h:ia", $file_last_modified)."</br>"; //TODO fix date: Last modified Saturday, 09th, March, 2019, 12:02am

?>
