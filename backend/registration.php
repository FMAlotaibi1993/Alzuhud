<?php
include ('classes/users.php');
$new_user = new USER();

// my_simple_crypt('hello', 'e')
// GET, POST, UPDATE, PULL, DELETE
// function firas_crypt( $string, $action = 'e' ) {
//     // you may change these values to your own
//     $secret_key = 'alzuhudfahad';
//     $secret_iv = 'firasalzuhud';
//
//     $output = false;
//     $encrypt_method = "AES-256-CBC";
//     $key = hash( 'sha256', $secret_key );
//     $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
//
//
//     if( $action == 'e' ) {
//         $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
//     }
//     else if( $action == 'd' ){
//         $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
//     }
//
//     return $output;
// }

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
  $Uemail = $_POST['uemail'];
  $namefirst = $_POST['fname'];
  $Lname = $_POST['lname'];
  $UPass = $_POST['pass'];
  $UName = $_POST['uname'];
  $EncryPass;
// TODO:: use crypt() to encrypt $upass;
// convert $UPass = to hash function (842r03u0982q3908o2pjkqd);

$encryPass = $new_user->firas_crypt($UPass);
  $new_user->register($namefirst, $Lname, $Uemail, $UName, $encryPass) ;
} else {
  die;
}
 ?>
