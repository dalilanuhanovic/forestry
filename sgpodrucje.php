
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

 <!-- povezujemo sa css dokumentom u kojem uredjujemo krajnji izgled stranice-->
 <link href="css.css" type="text/css" rel="stylesheet" />
 <body>

<header>
<!-- Navigacijska traka-->
<div class="topnav" id="myTopnav">
<a href="pocetnaa.php" >Početna</a>
<a href="sifrarnici.php">Šifrarnici</a>
<a href="podjela.php" class="current">Prostorna podjela</a>
<a href="forma.php">Forma za unos</a>
</header>

<br>
    <br>
    <br>

 <br>

 <div class="button">
  <a href="podjela.php">Nazad</a>
</div>

    <form method="post" action="proccesspodjela.php">
                ŠGP šifra: <br>
               <input type = "number" name="ssifra">
               <br>
               ŠGP naziv: <br>
               <input type = "text" name="snaziv">
               <br>
               Uređajni period od: <br>
               <input type = "number" name="od">
               <br>
               Uređajni period do: <br>
               <input type = "number" name="do">
               <br>
           

               
                <input name="save" type="submit" value="submit" onclick="window.open('podjela.php')"/>

                </form>
</body>
<?php

  

?>
</html>