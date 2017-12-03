<html>
<body>

 <form action="insert_cat.php" method="POST">
  Nazwa Kategori: <input type="text" name="kat"><br>
  <input type="submit" value="Dodaj">
</form>

<ul>
<?php
$dba_name = "heroku_94287781fba39f4";
$mysql_username = "b4d6043aa104f8";
$mysql_password = "69463135";
$server_name = "eu-cdbr-west-01.cleardb.com";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $dba_name); 
$mysql_qry = "select * from category"; 
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


