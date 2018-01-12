<html>
<body>

 <form action="insert_cat.php" method="POST">
  Nazwa Kategori: <input type="text" name="kat"><br>
  <input type="submit" value="Dodaj">
</form>

<ul>
<?php

$dba_name = getenv("db_name");
$mysql_username = getenv("login");
$mysql_password = getenv("pass");
$server_name = getenv("serv_name");
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $dba_name); 
mysqli_set_charset($conn,"utf8");
$mysql_qry = "select * from categories"; 
$result = mysqli_query( $conn,$mysql_qry);

while($row = mysqli_fetch_assoc($result)) {
	$name = $row['Name'];
	$id=$row['Id'];   
   echo "<li><a href='question.php?id=".$id."'>".$name."</a></li>";

}
?>
</ul>
</body>
</html> 


