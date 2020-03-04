<!-- Ammiël -->

<!DOCTYPE HTML>
<html>
  
<title>Vuurwerk</title>

<head>
  
<link href="../css/vuurw_css.css" rel="stylesheet">
<link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/646651183989260322/656472444952903700/icon.png">

</head>
<body>
<!-- <div class="header">
	<span style="font-size:35px;cursor:pointer;color:#494747;"onclick="openNav()" class="left">&#9776;</span>
	<span style="font-size:35px;cursor:pointer"onclick="openSearch()" class="right"></span>
	<a href="index.php"><img src="../img/Firework_Rocket.png" width="80" height="80" class="center"> </a>
</div> -->


<div id="bannerimage">
<!-- <div id="sidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" class="right">&times;</a>
   
   <a href="knalvw_home.php">Knalvuurwerk</a> 
   <a href="siervw_home.php">Siervuurwerk</a> 
     <a href="compassortiment_home.php">Compleet assortiment</a>-->
     <?php
     if(isset($_COOKIE['pass']) && isset($_COOKIE['user'])){
include "../php/UserLoginVer.php";

$id = getImg(sha1($_COOKIE['pass']));
foreach($id as $row){
  $img = $row['imag'];
}
     }else{
       $_COOKIE['pass'] = ' ';
       $_COOKIE['user'] = ' ';
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

</div>  

  
<?php 
include "../php/functies_vw.php";
PrintNav();
?>


<div class="kolom"align="center">
  <?php

// ToonProduct('alle');
if(isset( $_GET['categorie']) == null){
 ToonProduct('alle');

}else{
      ToonProduct($_GET['categorie']);
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


