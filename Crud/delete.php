<?php
	include "config.php";
	if(isset($_GET['id'])){
		$user_id=$_GET['id'];
		$sql = "DELETE FROM customers WHERE Id='".$user_id."'";
		$execute=mysqli_query($connection,$sql);
		echo "<div class='container'>Pomyślnie usunięto użytkownika<br>";
		echo "<a href='index.php' class='btn btn-primary'>Cofnij</a></div>";
	}
	else{
		echo "Błąd";
		include "select.php";
	}
?>
<html>
	<head>
		<title>Usuń użytkownika</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<head>
</html>