<?php 
$text = 'PHP Tutorial';
echo $text . "<br/>";
$text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
echo $text . "<br/>";
?>