<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "lab9update") or die(mysqli_error($link));

$pNama = $_POST["nama"];
	$pTel = $_POST["umur"];
	$pAdd = $_POST["emel"];
	$pid2 = $_POST["id2"];

$query = "UPDATE person SET Person_name = '$pNama', Person_telephone = '$pTel', Person_address = '$pAdd' WHERE Person_ID = '$pid2'";

$result = mysqli_query($link,$query) or die ("Could not execute query in ubah.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='display.php' </script>";
}
?>