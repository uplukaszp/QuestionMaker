<html>
<?php
if(isset($_GET['err']))
{
	$error=$_GET['err'];
	echo $error;
}else if(isset($_GET['id']))
		$id=$_GET['id'];
	else
		header("Location: index.php");
?>
<body>

 <form action="insert_question.php" method="POST">
	<input type="hidden" name="popr1" value="0">
	<input type="hidden" name="popr2" value="0">
	<input type="hidden" name="popr3" value="0">
  Pytanie: <input type="text" name="pyt"><br>
  Odp1: <input type="text" name="odp1"><input type="checkbox" name="popr1" value="1"><br>
  Odp2: <input type="text" name="odp2"><input type="checkbox" name="popr2" value="1"><br>
  Odp3: <input type="text" name="odp3"><input type="checkbox" name="popr3" value="1"><br>
  Ile pkt:<input type="text" name="pkt"><br>
  <input type="hidden" name="id_kat" value="<?php echo $id;?>"><br>
  <input type="submit" value="Dodaj">
</form> 
</body>
</html> 


