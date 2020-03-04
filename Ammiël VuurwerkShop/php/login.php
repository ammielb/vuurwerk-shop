<?php
// Ammiel
function connectLog(){
      $servername = "localhost"; 
      $username = "root";
      $password = "";
      $db_name="Login";
      
      $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      return $conn;
    
    }
   

  //login

  
  
  function CheckData($username, $password){

    $conn = connectLog();
    $result = $conn-> prepare("SELECT * FROM accounts WHERE Username = :user AND Passwor = :pass");

    $pass = sha1($password);

$result -> bindparam("user" , $username);
$result -> bindparam("pass" , $pass);
$result -> execute();
if($result -> rowCount() == 1){
    return TRUE;
}else{
    return FALSE;
}
  }




  function CheckAcces($user, $pass){
      $user = $_POST['Username'];
      $pass = $_POST['Password'];
      $return =CheckData($user,$pass);
      if($return == TRUE){
          header("Location:../home/AdminPanel.php");
      }else{
          $message = "Acces Denied";
          echo "<script type='text/javascript'>alert('$message');</script>";
          header( "refresh:0.0; url=../home/LoginIndez.php" ); 
      }
  }



     CheckAcces($_POST['Username'],$_POST['Password']);
  ?>