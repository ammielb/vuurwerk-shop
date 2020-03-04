<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';
$dbname
try{
$dbh = new PDO("mysql:host=$hostname;dbname=login",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql =$dbh ->prepare("INSERT INTO accounts ('Username', 'Email', 'Passwor')
VALUES (':user' , ':Email', ':pass')");
$sql -> bindParam('user',$_POST['Username']);
$sql -> bindParam('Email',$_POST['Email']);
$sql -> bindParam('pass',$_POST['Password']);
if ($dbh->query($sql)) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}catch(PDOException $e){
  
    echo $e->getMessage();
}

}
?>