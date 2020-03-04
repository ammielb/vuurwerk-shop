
  <?php
  if(isset($_POST['Remember'])){
    setcookie('user', $_POST['Username'], time() + 360, "/"); // 86400 = 1 day
    setcookie('pass', $_POST['Password'], time() + 360, "/"); // 86400 = 1 day
  }
function connectLog(){
      $servername = "localhost"; 
      $username = "root";
      $password = "";
      $db_name="useracc";
      
      $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      return $conn;
    
    }
   

//getdata

function GetDataLog($username, $password){
    $conn = connectLog();
    $result = $conn-> prepare("SELECT * FROM users WHERE Gebruikersnaam = :user AND Wachtword = :pass");

    $result -> bindparam("user" , $username);
    $result -> bindparam("pass" , $password);
    $result -> execute();
    return $result;
}


// check of het in de db is
  function CheckData($user, $pass){
$result = GetDataLog($user,$pass);
if($result -> rowCount() == 1){

    return TRUE;
}else{
    return FALSE;
}
  }



function Register($user,$pass,$email){


$results = CheckData($user,$pass); 

    if($results ==TRUE){
        $message = "Deze zijn al in gebruik";
        echo "<script type='text/javascript'>alert('$message $results');</script>";
        header( "refresh:0.0; url=../home/RegisterUser.php" ); 
    }else{

        $conn = connectLog();

        $qry = $conn -> prepare("INSERT INTO `users` (`Gebruikersnaam`, `Email`, `Wachtword`, `User_id`) VALUES (:user, :Email, :pass, NULL) ");
    $qry-> bindparam("user" , $user);
    $qry -> bindparam("pass" , $pass);
    $qry -> bindparam("Email" , $email);
    if($qry -> execute()){

        $message = "Welkom/Welcome/Willkommen/bonjour";
        echo "<script type='text/javascript'>this.alert('$message');</script>";
        header( "refresh:0.0; url=../home/index.php" ); 

    }
    }

}

  function CheckAcces($user, $pass){
      $return =CheckData($user,$pass);
      if($return == TRUE){
          header("Location:../home/ProfielUser.php");
      }else{
          $message = "Acces Denied";
          echo "<script type='text/javascript'>alert('$message');</script>";
          header( "refresh:0.0; url=../home/inLogUser.php" ); 
      }
  }
function insertImage($user, $pass, $image){
$result = GetData($user,$pass);


foreach($result as $row){
    $curr_id = $row['User_id'];
}
echo $curr_id;
}




if(isset($_POST['Register'])){
    Register($_POST['Username'],sha1($_POST['Password']), $_POST['Email']);
}elseif(isset($_POST['LogIn'])){
     CheckAcces($_POST['Username'],sha1($_POST['Password']));
}

function UpdImg($pass, $img){
    $conn = connectLog();
    
    $qry = $conn -> prepare("UPDATE users SET imag = :img WHERE Wachtword = :pass");
$qry -> bindParam("img", $img);
$qry -> bindParam("pass", $pass);
if($qry -> execute()){
    echo"alles goed";
}
}

function getImg($Pass){
$conn = connectLog();

    $qry = $conn -> prepare("SELECT imag FROM users WHERE Wachtword = :pass ");
    $qry -> bindparam("pass" , $Pass);
    if($qry -> execute()){
        return $qry;
    }
}




  ?>