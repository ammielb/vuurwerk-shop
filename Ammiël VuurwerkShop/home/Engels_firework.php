<!-- AMMIEL -->

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

<div class="VuurwerkOpdr" align="center">
<div class="hoofd">VUURWERKVERBOD<br></div> 
I’m for a firework ban because you could just look to a sow on tv that fires firworks for you en after al that damage that has been done by people fireing fireworks the negatives side of it is starting to become more and more and become more then the positive side. I also think it should be banned because of all the animals that are being strressed out because of all the loud bangs. I once had a dog and a rabbit my rabbbit died because of a firecracker that landen under his cage (his cage was on my balcony). And my dog was also very scared because of firework.
<br><br>

<div class="hoofd">NEGATIVES<br></div> 
<div class="nadelen"><br>
•	Het is very pretty to look at<br>
•	It is a tradition<br>
•	First black pete’s now this?<br>
•	Alot of people have fun firing off fireworks<br>
<br>
</div> 
<br>
<div class="hoofd">POSITIVES<br></div> 
<div class="voor">
•	Animals and elderly dont have to be  so strest out any more is this goes throught<br>
•	Elderly  en refugees that have ptsd dont get flashbacks because of the loud bangs<br>
•	Busstop wont get damaged <br>
•	Police man and ambulances wont be getting attacked by flying fireworks<br>
<br>
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
<div class="space">
  <footer>
        <div class="footer">
            <Center>Made By Ammiël Buijs</center>
        </div>
    </div>
  </footer>

