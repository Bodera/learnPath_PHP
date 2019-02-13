<?php 
if (!empty($_SERVER['HTTPS']))
{
    echo 'https is enabled.' ."<br/>";
} 
else
{
    echo 'http is enabled.' ."<br/>";
}
?>