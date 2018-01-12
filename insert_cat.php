<?php
require "index.php";
if(isset($_POST['kat']))
{
	$kat=$_POST['kat'];
	$mysql_qry = "insert into categories values('','$kat')"; 
	$result = mysqli_query( $conn,$mysql_qry);
	header("Location: index.php");
}

?>