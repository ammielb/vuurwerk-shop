<!-- Ammiël -->

<!DOCTYPE HTML>
<html>
  
<title>Vuurwerk</title>

<head>
  
<link href="../css/vuurw_css.css" rel="stylesheet">
<link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/646651183989260322/656472444952903700/icon.png">

</head>

<div id="bannerimage">
<!-- <div id="sidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" class="right">&times;</a>
   
   <a href="knalvw_home.php">Knalvuurwerk</a> 
   <a href="siervw_home.php">Siervuurwerk</a> 
     <a href="compassortiment_home.php">Compleet assortiment</a>-->

<?php
include "../php/UserLoginVer.php";

$id = getImg(sha1($_COOKIE['pass']));
foreach($id as $row){
  $img = $row['imag'];
}
?>
<style>
.image{
  background-color:red;
  width: 150px;
  height: 150px;
  float:right;
  border-radius: 50%; /*don't forget prefixes*/
  background-image: url("<?php echo $img;?>");
  background-position: center center;
  /* as mentioned by Vad: */
  background-size: cover;
}</style>
<div class='ProfielTab'>

    <div class="image">

     </div>
     <div>
     user: <?php echo $_COOKIE['user'];?><br>
     <a href="uitlog.php?login='FALSE'">Uitloggen</a>
  </div>  
    </div>
</div>  


<body>
<!-- <div class="header">
	<span style="font-size:35px;cursor:pointer;color:#494747;"onclick="openNav()" class="left">&#9776;</span>
	<span style="font-size:35px;cursor:pointer"onclick="openSearch()" class="right"></span>
	<a href="index.php"><img src="../img/Firework_Rocket.png" width="80" height="80" class="center"> </a>
234xcloseNav()" class="right">&times;</a>
   
   <a href="knalvw_home.php">Knalvuurwerk</a> 
   <a href="siervw_home.php">Siervuurwerk</a> 
     <a href="compassortiment_home.php">Compleet assortiment</a>-->
</div>  
<?php 
include "../php/functies_vw.php";
PrintNav();

?>
  
  
  
<div class="container" align="center">

<form action="" method='post'enctype="multipart/form-data"> 
<input type="file" name="image" id=""><br>
<input type="submit" name = 'sub' >
</form>

<?php


// ToonProduct('alle');
if(isset($_POST['sub'])){

    // haal data uit de file
$fileName = $_FILES['image']['name'];
$fileTmpName = $_FILES['image']['tmp_name'];
$fileSize= $_FILES['image']['size'];
$fileType = $_FILES['image']['type'];
// maak de pad naar de uiteindelijke pad aan
$file = "../UserImages/". $fileName;
// haal de  punt weg en laat alleen de extentsie achter
$fileExt = explode('.' , $fileName);
$fileActualExt = strtolower(end($fileExt));

$FileFormats = ['jpg', 'png', 'jpeg'];
//kijk of de extensie goed is
        if(in_array($fileActualExt, $FileFormats)){
            echo"goed gekeurd";
            move_uploaded_file($fileTmpName,$file);  
            header( "refresh:0.0;" ); 
            $upd = true; 
            }else{
              $upd = false;
        echo"<script> alert'alleen JPG's PNG's en JPEG's zijn toegestaan'</script>";
            }
// if($insert === true){
//     $qry = $conn ;
// }
if(isset($_COOKIE['user']) && $upd === true){
  UpdImg(sha1($_COOKIE['pass']), $file);
}

unset($_POST['sub']);
}
    


?>
</div>
</body>

<script>
function openNav() {
  document.getElementById("sidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("sidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


