<?php
	include "config.php";
	if (isset($_POST['submit'])){
		$surname = @$_POST['surname'] ; 
		$name =  @$_POST['name'] ;
		$city = @$_POST['city'];
		$fm = @$_POST['fm'];
		$sql = "INSERT INTO customers (name,surname,city,fm) VALUES ('".$name."','".$surname."','".$city."','".$fm."')";
		$execute=mysqli_query($connection,$sql);
		if($execute == TRUE){
			echo "Dodano rekord do bazy danych";
		}
		else{
			echo "Błąd :".$sql." - ".$connection->error;
		}
 		mysqli_close($connection);
	}

?>
<!DOCTYPE html>
	<head>
		<title>Dodaj użytownika</title>
		<meta charset="utf-8">
		<meta name="author" content="Maksymilian Jachymczak">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		<form method="POST" action="">
			<fieldset>
				<legend> Dodaj Użytkownika </legend>
				Imie : <br>
				<input type="text" name="name" id="name" placeholder="Imie">
				<br>
				Nazwisko : <br>
				<input type="text" name="surname" id="surname" placeholder="Nazwisko">
				<br>
				Miasto : <br>
				<select name="city" id="city">
					<option value="Kraków">Kraków</option>
					<option value="Gdańsk">Gdańsk</option>
					<option value="Warszawa">Warszawa</option>
					<option value="Wrocław">Wrocław</option>
					<option value="Zakopane">Zakopane</option>
				</select>
				<br>
				Płeć : <br>
				<input type="radio" name="fm" value="k">&nbsp;Kobieta<br>
				<input type="radio" name="fm" value="m">&nbsp;Mężczyzna
				<br>
				<br>
				<a href="index.php"><input type="button" value="Cofnij" class="btn btn-primary"></a>
				<input type="submit" value="Zatwierdź" name="submit" class="btn btn-success">
				<input type="reset" value="Kasuj" class="btn btn-danger">
			</fieldset>
		</form>
		</div>
	</body>
</html>