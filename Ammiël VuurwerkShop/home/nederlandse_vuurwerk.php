<!-- AMMIel -->

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
Ik ben voor een vuurwerk verbod  want je kan ook naar een vuurwerk show kijken op je tv en na alle schade vuurwerk heeft gedaan worden de nadelen ophopend meer dan de voordelen en de dieren worden er ook heel erg bang van. Ik had een hond en een konijn mijn konijn had door een rotje onder zijn hok(zijn hok stond op mijn balkon) een hartstilstand gekregen. En ik zag dat mijn hond er heel erg bang voor was 
<br><br>

<div class="hoofd">NADELEN<br></div> 
<div class="nadelen">
•	Het is heel mooi te naar te kijken<br>
•	Het is traditie<br>
•	Eerst zwarte piet en nu deze traditie<br>
•	Veel mensen hebben plezier in het afsteken van vuurwerk<br>
</div> 
<br>
<div class="hoofd">VOORDELEN<br></div> 
<div class="voor">
•	Dieren en ouderen kunnen zo erg gestrest van de knallen dat ze een hartstilstand kunnen krijgen als er geen verbod is<br>
•	Oudere mensen en vluchtelingen die PTSS hebben vanwege oorlog kunnen flashbacks krijgen vanwege de harde knallen als er geen verbod is <br>
•	Jongeren en met name kinder komen in aanraking met illegaal vuurwerk<br>
•	Knal vuurwerk is nog best zonde van het geld<br>
</div>
 	

</div>
 	

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

