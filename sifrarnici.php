<html>
 <head>
   
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body>

    <header>
        <!-- Navigacijska traka-->
        <div class="topnav" id="myTopnav">
          <a href="pocetnaa.php" >Početna</a>
        
          <a href="sifrarnici.php" class="current">Šifrarnici</a>
          <a href="podjela.php">Prostorna podjela</a>
          <a href="forma.php" >Forma za unos</a>
        </header>
          
    
        <br>
        <br>
        <br>
        <br>


<?php
 
    $conn = mysqli_connect("localhost", "root", "", "ervin");
 
    if (isset($_POST["addInvoice"]))
    {
        $unosi_podatke = $_POST["unosi_podatke"];
 
        $sql = "INSERT INTO unos (unosi_podatke) VALUES ('$unosi_podatke')";
        mysqli_query($conn, $sql);
        $unosId = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["sifra_vrsta"]); $a++)
        {
            $sql = "INSERT INTO sifrarnici (unosId, sifra_vrsta, sifra_forma) VALUES ('$unosId', '" . $_POST["sifra_vrsta"][$a] . "', '" . $_POST["sifra_forma"][$a] . "')";
            mysqli_query($conn, $sql);
        }
 
        echo "<p>Sifrarnici su uneseni u bazu.</p>";
    }
 
?>

<form method="POST" action="sifrarnici.php">

<p>
    <input name="unosi_podatke" placeholder="Osoba koja unosi podatke">
</p>

<table>
    <tr>
        <th>#</th>
        <th>Vrsta</th>
        <th>Forma</th>
    </tr>

    <tbody id="tbody"></tbody>
    </table>
 
    <button type="button" onclick="addItem();">Dodaj red</button>
    <input type="submit" name="addInvoice" value="Unesi podatke u bazu">
</form>

<script>
    var sifrarnici = 0;
    function addItem() {
        sifrarnici++;
 
        var html = "<tr>";
            html += "<td>" + sifrarnici + "</td>";
            html += "<td><input type='text' name='sifra_vrsta[]'></td>";
            html += "<td><input type='number' name='sifra_forma[]'></td>";
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

