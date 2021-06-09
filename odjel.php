<html>
 <head>
   
</head>
<link rel="stylesheet" type="text/css" href="css.css">
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

    


<?php
 
    $conn = mysqli_connect("localhost", "root", "", "ervin");
 
    if (isset($_POST["addInvoice"]))
    {
        $gj = $_POST["gj"];
 
        //$sql = "INSERT INTO sgp (sgp) VALUES ('$sgp')";
        //mysqli_query($conn, $sql);

        //$sifraId = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["onaziv"]); $a++)
        {
            $sql = "INSERT INTO odjel (gj, onaziv) VALUES ('$gj', '" . $_POST["onaziv"][$a] . "')";
            mysqli_query($conn, $sql);
        }
 
        echo "<p>Odjeli su uneseni u bazu.</p>";
    }
 
?>

<form method="POST" action="odjel.php">

<div class="button">
  <a href="podjela.php">Nazad</a>
</div>
<p>
    <input name="gj" placeholder="Upiši naziv gospodarske jedinice">
</p>

<table>
    <tr>
        <th>#</th>
        <th>Naziv</th>
    </tr>

    <tbody id="tbody"></tbody>
    </table>
 
    <button type="button" onclick="addItem();">Dodaj red</button>
    <input type="submit" name="addInvoice" value="Unesi podatke u bazu">
    
</form>

<script>
    var odjel = 0;
    function addItem() {
        odjel++;
 
        var html = "<tr>";
            html += "<td>" + odjel + "</td>";
            html += "<td><input type='text' name='onaziv[]'></td>";
            html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
        html += "</tr>";
 
        var row = document.getElementById("tbody").insertRow();
        row.innerHTML = html;
    }
 
function deleteRow(button) {
    button.parentElement.parentElement.remove();
    // first parentElement will be td and second will be tr.
}
</script>

