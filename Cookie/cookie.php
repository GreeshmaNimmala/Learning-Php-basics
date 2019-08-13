<?php


$cookie_name="visitor_count";
$count;

if(isset($_COOKIE[$cookie_name])){

    $count=$_COOKIE[$cookie_name];
    $count++;
    setcookie($cookie_name,$count,time()+5,"/");
   }
else{
    $count=1;
    setcookie($cookie_name,$count,time()+5,"/");
}
echo "You visited this page".$count."times";

