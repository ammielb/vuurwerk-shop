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
        <form action="../php/UserLoginver.php?id='Log'" method="post" autocomplete="off" >
        <div class="content">
            Username:<br>
            <input type="text" value=""name="Username" id="username"placeholder="Username"autocomplete="off"><br>
            Password:<br>
            <input type="password" value="" name="Password" id="password" placeholder="Password"autocomplete="off"><br>
            <input type="checkbox" name="Remember" required id=""> Remember Me<br>
            <a href="RegisterUser.php">Register</a><br>
            <input type="submit" name='LogIn'value="Login">
            

</div>
        </form>

</div>
</body>

</html>
<?php 

if(isset($_COOKIE['user']) &&$_COOKIE['user']  !== " "){
      include_once "../php/UserLoginVer.php";
      CheckAcces($_COOKIE['user'],sha1($_COOKIE['pass']));
  }
?>


