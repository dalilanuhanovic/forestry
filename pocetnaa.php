<HTML>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
    <head>

      <!doctype html>
      <html lang="en">
          
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     </head>     
       <!-- povezujemo sa css dokumentom u kojem uredjujemo krajnji izgled stranice-->
        <link href="css.css" type="text/css" rel="stylesheet" />
        <body>

 
    
    <header>
    <!-- Navigacijska traka-->
    <div class="topnav" id="myTopnav">
      <a href="pocetnaa.php" class="current">Početna</a>
     
      <a href="sifrarnici.php">Šifrarnici</a>
      <a href="podjela.php">Prostorna podjela</a>
      <a href="forma.php">Forma za unos</a>
    </header>
      

    <br>
    <br>
    <br>


    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>

    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
  


    </body>
    
  