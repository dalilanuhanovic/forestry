<?php
include_once 'database.php';
if (isset($_POST['save']))
{
        $ssifra= $_POST['ssifra'];
        $snaziv= $_POST['snaziv'];
        $od= $_POST['od'];
        $do= $_POST['do'];
      

        $sql= "INSERT INTO sumskogospodarsko (ssifra, snaziv, od, do)
        VALUES ('$ssifra', '$snaziv', '$od', '$do')";

        if (mysqli_query($conn, $sql)){
            echo "okay";

        }   else {
            echo "ERROR:" . $sql . "
            " . mysqli_error($conn);

        }
        mysqli_close($conn);

}
?>