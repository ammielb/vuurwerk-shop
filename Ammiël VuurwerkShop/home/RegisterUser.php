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
  
  <div class="Loginbox" align="center">
        <form action="../php/UserLoginver.php" method="post" autocomplete="off" >
        <div class="content">
            Username:<br>
            <input type="text" value=""name="Username" id="username"placeholder="Username"autocomplete="off"><br>
            Password:<br>
            <input type="password" value="" name="Password" id="password" placeholder="Password"autocomplete="off"><br>
  <input type="email" name="Email" id=""><br>
            <input type="submit" name='Register' value="Login">
            

</div>
        </form>

</div>
</body>
</html>


