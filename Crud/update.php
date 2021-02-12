<?php
	include "config.php";
	
	if(isset($_POST['update'])){
		$name =  @$_POST['name'];
		$surname =  @$_POST['surname'];
		$city = @$_POST['city'];
		$fm = @$_POST['fm'];
		$id=$_POST['id'];
		$n = strtoupper($name);
		$s= strtoupper($surname);
		$sql = "UPDATE customers SET id='".$id."',name='".$n."',surname='".$s."', city='".$city."',fm='".$fm."' WHERE id=".$_GET['id'];
		$execute = mysqli_query($connection,$sql);
		if($execute == TRUE){
			echo "Zmodyfikowano rekord";
		}
		else{
			echo "Błąd :".$sql." - ".$connection->error;
		}
	}
	
	if(isset($_GET['id'])){
		$user_id=$_GET['id'];
		$sql = "SELECT * FROM customers WHERE Id ='".$user_id."'";
		$execute = mysqli_query($connection,$sql);
		if(mysqli_num_rows($execute)>0){
			while($row = mysqli_fetch_assoc($execute)){
				$name = $row['name'];
				$surname = $row['surname'];
				$city = $row['city'];
				$fm = $row['fm'];
			}
?>
<html>
	<head>
	<title>Zmień dane</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		<form method="POST" action="">
			<fieldset>
				<legend>Zmień dane</legend>
				Id : <br>
				<input type="number" name="id" id="id" placeholder="0" value="<?php echo $user_id; ?>">
				<br>
				Imie : <br>
				<input type="text" name="name" id="name" placeholder="Imie" value="<?php echo $name ?>">
				<br>
				Nazwisko : <br>
				<input type="text" name="surname" id="surname" placeholder="Nazwisko" value="<?php echo $surname ?>">
				<br>
				Miasto : <br>
				<select name="city" id="city">
					<option value="Kraków" <?php if($city == "Kraków"){ echo "selected";}?>>Kraków</option>
					<option value="Gdańsk" <?php if($city == "Gdańsk"){ echo "selected";}?>>Gdańsk</option>
					<option value="Warszawa" <?php if($city == "Warszawa"){ echo "selected";}?>>Warszawa</option>
					<option value="Wrocław" <?php if($city == "Wrocław"){ echo "selected";}?>>Wrocław</option>
					<option value="Zakopane" <?php if($city == "Zakopane"){ echo "selected";}?>>Zakopane</option>
				</select>
				<br>
				Płeć : <br>
				<input type="radio" name="fm" value="k" <?php if($fm == "k"){ echo "checked";}?>>&nbsp;Kobieta<br>
				<input type="radio" name="fm" value="m" <?php if($fm == "m"){ echo "checked";}?>>&nbsp;Mężczyzna
				<br>
				<br>
				<a href="index.php"><input type="button" value="Wróć" class="btn btn-primary"></a>
				<input type="submit" value="Zatwierdź" name="update" class="btn btn-success">
			</fieldset>
		</form>
		<?php
		}
		else{
			include "index.php";
			}
		}
		?>

		</div>
	</body>
</html>
