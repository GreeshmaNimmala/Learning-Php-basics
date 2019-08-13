<?php 

$to_email='testtoweb1@gmail.com';
$subject='test mail';
$message='hello';
$headers='From:testfromweb1@gmail.com';
mail($to_email,$subject,$message,$headers);


 echo "Mail Sent Successfully";

?>