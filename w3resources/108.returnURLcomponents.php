<?php
#protocol://hostname/other_information
#$uri = $_SERVER['REQUEST_URL'];
$local_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $local_url;
parse_url($local_url);
echo "<br/>";
?>

<?
$url = $_SERVER;

echo "<br/>";
echo "Scheme : " . $url['SERVER_PROTOCOL']."<br/>";
echo "Host : " . $url['SERVER_NAME']."<br/>";
#echo "<br/>";
echo "Port : " . $url['SERVER_PORT']."<br/>";
echo "Path : " . $url['SCRIPT_NAME']."<br/>";

$model_url = $url['SERVER_NAME'].':'.$url['SERVER_PORT'].$url['SCRIPT_NAME'];
echo "Access link: " . $model_url;
?>