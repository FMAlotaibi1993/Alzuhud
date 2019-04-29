<?php
class USER
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $Fname;
  private $Lname;
  private $UEmail;
  private $UName;
  private $UPass;
  private $DataConnect;



  public function __construct(){
    try {
    $this->DataConnect = new PDO("mysql:host=$this->servername;dbname=al_zuhud_users", $this->username, $this->password);
    // set the PDO error mode to exception
    $this->DataConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
    catch(PDOException $e)
    {
    // echo "Connection failed: " . $e->getMessage();
    }

  }

  private function getusernames($uname){
    $Query = "select * from usersdata where username = :uname";
    $sql = $this->DataConnect->prepare($Query);

    $sql->execute(array(":uname"=>$uname));

    $result = $sql->fetchAll();
    $f = fopen('log', 'w');
    fwrite($f, json_encode($result));
    fclose($f);
    return $result;

  }

  public function login($Uname, $Upass){
    //LOGIN
    $result;

    $dbUser = $this->getusernames($Uname);
      if(empty($dbUser) || $dbUser == false){
        $result['success'] = false;
        $result['message'] = 'No User Found';
      }else{
        $resultpass = $this->firas_crypt($Upass , $action = 'd' );
        if($resultpass == $Upass){
          $result['success'] = true;
          $result['message'] = 'login success';
        }else{
          $result['success'] = false;
          $result['message'] = 'Password Wrong';
        }
      }

      return $result;


  }
  public function register($Fname, $Lname, $Uemail, $UName, $UPass){
    $pdoQuery = "INSERT INTO `usersdata`(`first_name`, `last_name`, `email`, `username`, `password`)
    VALUES (:fname, :lname, :uemail, :uname, :pass)";
    $sql = $this->DataConnect->prepare($pdoQuery);

    $pdoExec = $sql->execute(array(":fname"=>$Fname,":lname"=>$Lname,":uemail"=>$Uemail,":pass"=>$UPass,":uname"=>$UName));
    if($pdoExec)
       {
           echo 'Data Inserted';
       }else{
           echo 'Data Not Inserted';
       }

  }
  function firas_crypt( $string, $action = 'e' ) {
      // you may change these values to your own
      $secret_key = 'alzuhudfahad';
      $secret_iv = 'firasalzuhud';

      $output = false;
      $encrypt_method = "AES-256-CBC";
      $key = hash( 'sha256', $secret_key );
      $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );


      if( $action == 'e' ) {
          $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
      }
      else if( $action == 'd' ){
          $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
      }

      return $output;
  }




}
