
<!-- Ammiël -->
<html>
<link href="../css/vuurw_css.css" rel="stylesheet">
<div class="container" align="center">
  <?php
// maak de connectie naar de database

function connect(){
  $servername = "localhost"; 
  $username = "root";
  $password = "";
  $db_name="vuurwerk";
  
  $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $conn;

}
// print de navabar voor klant
function PrintNav(){ 

?>
<div class='bar'>
 <ul>
  <li><a href='index.php'>Home</a></li>
  <li class='dropdown'>
    <a href='javascript:void(0)' class='dropbtn'>Categorie</a>
    <div class='dropdown-content'>
    <?php

    $cat=PrintCatNav();
    $cat;
    ?>
</div>
    </li>

  <li class='dropdown'>
    <a href='LoginIndez.php' class='dropbtn'>Admin</a>
    </li>

  <li class='dropdown'>
    <a href='javascript:void(0)' class='dropbtn'> Vuurwerk Opdracht</a>
    <div class='dropdown-content'>
    <a href='nederlandse_vuurwerk.php'>nederlands</a>
    <a href='Engels_firework.php'>English</a> 
    </div>
    </li>
    <li><a href='1 kolom.php'> 1 kolom</a></li>
    <li><a href='inlogUser.php'> Inloggen </a></li>
</ul></div></html>

<?php
}
//print navbar voor admin
function adminNav(){
  ?>
  <ul>
  <li><a href='index.php'>Home</a></li>
  <li class='dropdown'>
    <a href='javascript:void(0)' class='dropbtn'>Categorie</a>
    <div class='dropdown-content'>
    <?php

    $cat=PrintCatNav();
    $cat;
    ?>
</div>
    </li>

  <li class='dropdown'>
    <a href='javascript:void(0)' class='dropbtn'>Admin</a>
    <div class='dropdown-content'>
      <a href='voorraadTable.php'>Voorraad</a>
      <a href='AdminInsert.php'>Insert Product</a>
      <a href="NewAccAdmin.php">Registreren</a>
    </div>
    </li>

  <li class='dropdown'>
    <a href='javascript:void(0)' class='dropbtn'> Vuurwerk Opdracht</a>
    <div class='dropdown-content'>
    <a href='nederlandse_vuurwerk.php'>nederlands</a>
    <a href='Engels_firework.php'>English</a> 
    </div>
    </li>
    <li><a href='1 kolom.php'> 1 kolom</a></li>
    <li><a href='inlogUser.php'> Inloggen </a></li>
</ul>
</div></html><?php
}
// haal alle categorieen maar 1 keer uit de database
function getCat(){
  $conn = connect();
  $result = $conn -> query("SELECT DISTINCT categorie FROM vuurwerk");
$data = $result -> fetchAll(PDO::FETCH_ASSOC);
return $data;
}

//print de categorie links voor de navabr
function printCatNav(){

  $data = getCat();
foreach($data as $row){

  echo '<a href="index.php?categorie=' . $row['categorie'] . '">' . $row['categorie'] . '</a>';

}

}

// haal ale producten uit de data base en order ze in een willekeurig volg order
function GetData($cat){
  $conn = connect();
  if($cat != 'alle'){
    $sql = "SELECT * FROM vuurwerk WHERE `categorie` = '$cat'ORDER BY naam ";
}else{
  $sql = "SELECT * FROM vuurwerk ORDER BY Naam";
}
$result = $conn -> query($sql);
$row = $result -> fetchAll(PDO::FETCH_ASSOC);
return $row;
  }
  
// toon de product
  function ToonProduct($cat){
  
$conn = connect();
$data = GetData($cat);
    foreach($data as $row){
             echo"<div class='product'><br><br>";
             echo $row['naam'] . "</img><br>";
             echo"<img height=200 src=../".$row['categorie']."/".$row['img'].">";
             echo"<div class='info'>";
             echo"Voorraad:" . $row["Voorraad"] . "<br>";
             echo "€".$row['euro']."<br>";
             echo"<form action='../php/BestelProduct.php?id=$row[naam]' method='post'>";
              echo"<input type='number' value='' min='1' placeholder='selecteer hier hoeveel' name='aantal'>";
              echo"</div>";
              echo"<input type='submit' class='toevoegbutton'  value='Toevoegen'></form>";  
    echo"</div>";
    }

}

function bestelProduct (){

  $conn = connect();
  $id = $_GET['id'];
  $aantal =0;
  $aantal = $_POST['aantal'];

if($_POST['aantal']==  0 ){


  header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
  $query = "UPDATE vuurwerk SET Voorraad = Voorraad - $aantal WHERE naam = '$id';";

  $result = $conn->query($query);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}
function GetVoorraad(){
  $conn = connect();
$euro = "SELECT naam, euro, Voorraad, Voorraad * euro AS Subtot,categorie FROM vuurwerk ORDER BY categorie  ";

$result = $conn -> query($euro);
$data =$result -> fetchAll(PDO::FETCH_ASSOC);
return$data;
}

function printVoorraad($data){
    echo"<table>";
echo"<th class='Naam'>Naam</th><th>Categorie</th><th class='prijs'>Prijs</th><th class='voorraad'>Voorraad</th><th class='bedrag'>Bedrag</th>";
  // print de voorraad de prijs en de bedrag 
            foreach($data as $row){
             echo"<tr>";
             echo"<td class='Naam'>". $row['naam']."</td>";
             echo"<td class='Naam'>". $row['categorie']."</td>";
             echo"<td class='prijs'>".$row['euro']."</td>"; 
             echo"<td class='voorraad'>".$row['Voorraad']."</td>"; 
             echo"<td class='bedrag'>".$row['Subtot']."</td>"; 
             echo"</tr>";
                }
          }

            function GetSum(){
            // print de sum
            $sum = "SELECT SUM(Voorraad * euro) FROM vuurwerk";

            $conn = connect();
            $result = $conn -> query($sum);
            $data =$result -> fetchAll(PDO::FETCH_ASSOC);
            return $data;
            }

          function printSum($data){
          foreach ($data as $row) {
              echo"<th class='Naam'>Totaal</th>";
              echo"<td></td>";
              echo"<th class='prijs'></th>";
              echo"<th class='voorraad'></td>";
              echo "<td class='Sum'>". $row['SUM(Voorraad * euro)']."</td>";
          }
  }
  //print de categorien voor bij form select 


  function InsertProduct(){
    

    $conn = connect();
    $sql = "INSERT INTO vuurwerk (categorie, euro, img, naam, Voorraad)
    VALUES ('".$_POST["categorie"]."','".$_POST["euro"]."','".$_POST["img"]."','".$_POST["naam"]."','".$_POST["Voorraad"]."')";
    
    
    if ($conn->query($sql)) {
        echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
    }
    else{
        echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
    }
    
    $conn = null;
    
    
    }


  ?>


</div>
</html>