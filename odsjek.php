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
            $odj = $_POST["odj"];
     
            //$sql = "INSERT INTO sgp (sgp) VALUES ('$sgp')";
            //mysqli_query($conn, $sql);


        //$sifraId_odsjek = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["naziv_odsjek"]); $a++)
        {
            $sql = "INSERT INTO odsjek (odj, naziv_odsjek) VALUES ('$odj', '" . $_POST["naziv_odsjek"][$a] . "')";
            mysqli_query($conn, $sql);
        }
 
        echo "<p>Odsjeci su uneseni u bazu.</p>";
    }
 
?>

<form method="POST" action="odsjek.php">

<div class="button">
  <a href="podjela.php">Nazad</a>
</div>
<p>
    <input name="odj" placeholder="Upiši naziv odjela">
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
    var odsjek = 0;
    function addItem() {
        odsjek++;
 
        var html = "<tr>";
            html += "<td>" + odsjek + "</td>";
            html += "<td><input type='text' name='naziv_odsjek[]'></td>";
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



