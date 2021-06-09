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
        $sgp = $_POST["sgp"];
 
        //$sql = "INSERT INTO sgp (sgp) VALUES ('$sgp')";
        //mysqli_query($conn, $sql);

 
        for ($a = 0; $a < count($_POST["gsifra"]); $a++)
        {
            $sql = "INSERT INTO gospodarskajedinica (sgp, gsifra, gnaziv) VALUES ('$sgp', '" . $_POST["gsifra"][$a] . "', '" . $_POST["gnaziv"][$a] . "')";
            mysqli_query($conn, $sql);
        }
 
        echo "<p>Gospodarske jedinice su unesene u bazu.</p>";
    }
 
?>

<form method="POST" action="gj.php">

<div class="button">
  <a href="podjela.php">Nazad</a>
</div>
<p>
    <input name="sgp" placeholder="Upiši naziv šgp">
</p>

<table>
    <tr>
        <th>#</th>
        <th>Šifra</th>
        <th>Naziv</th>
    </tr>

    <tbody id="tbody"></tbody>
    </table>
 
    <button type="button" onclick="addItem();">Dodaj red</button>
    <input type="submit" name="addInvoice" value="Unesi podatke u bazu">
    
</form>

<script>
    var gospodarskajedinica = 0;
    function addItem() {
        gospodarskajedinica++;
 
        var html = "<tr>";
            html += "<td>" + gospodarskajedinica + "</td>";
            html += "<td><input type='number' name='gsifra[]'></td>";
            html += "<td><input type='text' name='gnaziv[]'></td>";
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

