<html>
<head>
<title>insert data in database using PDO(php data object)</title>
<link rel="stylesheet" type="../css/vuurw_css.css" href="style.css">
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
</div>  

<!-- Navbar -->
<?php 
include "../php/functies_vw.php";
adminNav();
?>
  
<div class="container" align="center">

                    <form action="../php/insertData.php" method="post">

                    <label>Naam :</label><br>
                    <input type="text" name="naam" id="name" required="required" placeholder="Please Enter Name"/><br /><br />

                    <label>Prijs :</label><br>
                    <input type="number" name="euro" id="email" step="0.01" required="required"/><br/><br />

                    <label>Img Url :</label><br>
                    <input type="file" name="img" /><br/><br />
                    
                    <label>Categorie :</label><br>
                    <input type="text" name="categorie"><br/><br />

                    <label>Voorraad :</label><br>
                    <input type="number" name="Voorraad" id="email"  required="required"/><br/><br />

                    <input type="submit" value=" Submit " name="submit"/><br />
                    </form>
</div>
<!-- Right side div -->


</div>
<?php 


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

</html>


