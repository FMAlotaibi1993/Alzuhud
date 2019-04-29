<?php
include('classes/users.php');

$new_user = new USER();


$Uname = $_GET['username'];
$Upass = $_GET['password'];
$DataPass;

$DataPass = $new_user->login($Uname, $Upass);

if($DataPass['success'] = true){
  echo $DataPass['message'];
}else if ($DataPass['success'] = false){
  echo $DataPass['message'];
}






 ?>
