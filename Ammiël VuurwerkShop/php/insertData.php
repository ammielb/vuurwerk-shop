<?php



  ?>
  <html>
<head>
<title>insert data in database using PDO(php data object)</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
if(isset($_POST["submit"])){
    include "../php/functies_vw.php";
$dbh = connect();
$sql = "INSERT INTO vuurwerk (categorie, euro, img, naam, Voorraad)
VALUES ('".$_POST["categorie"]."','".$_POST["euro"]."','".$_POST["img"]."','".$_POST["naam"]."','".$_POST["Voorraad"]."')";


if ($dbh->query($sql)) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
    header('refresh:0.0; url=../home/AdminInsert.php');
}
else{
    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

$dbh = null;


}
?>
</body>
</html>