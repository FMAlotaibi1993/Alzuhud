<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=al_zuhud_users", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    // echo "Connection failed: " . $e->getMessage();
    }

$email = $_POST['uemail'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$pass = $_POST['pass'];
$user = $_POST['uname'];

$pdoQuery = "INSERT INTO `usersdata`(`first_name`, `last_name`, `email`, `username`, `password`)
VALUES (:fname, :lname, :uemail, :uname, :pass)";
$sql = $conn->prepare($pdoQuery);

$pdoExec = $sql->execute(array(":fname"=>$firstname,":lname"=>$lastname,":uemail"=>$email,":pass"=>$pass,":uname"=>$user));
if($pdoExec)
   {
       echo 'Data Inserted';
   }else{
       echo 'Data Not Inserted';
   }
  

// echo $firstname;


}
?>
