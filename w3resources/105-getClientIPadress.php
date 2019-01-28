<?php


function getUserIpAddr(){
     //whether ip is from share internet.
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether is is from proxy.
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address.
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo 'User Real IP - '.getUserIpAddr();


?>