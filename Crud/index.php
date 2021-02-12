<?php
	include "config.php";
	$results = 10;
	$sql = "SELECT * FROM customers";
	$execute = mysqli_query($connection,$sql);
	$total_results = mysqli_num_rows($execute);
	$pages = ceil($total_results/$results);
?>
<hmtl>
	<head>
		<title>Użytkownicy - lista</title>
		<meta charset="utf-8">
		<meta name="author" content="Maksymilian Jachymczak">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<style>
			.button{
				float:right;
				margin-top:10px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2>Użytkownicy <a href="create.php" class="button"><input type="button" value="Dodaj użytkownika" class="btn btn-primary"></a></h2>
			<table class="table">
				<thead>
					<tr>
						<th>Imie</th>
						<th>Nazwisko</th>
						<th>Miasto</th>
						<th>Płeć</th>
						<th>Akcja</th>
					</tr>
				</thead>
				<tbody>
					<?php

						if(!isset($_GET['page'])){
							$page=1;
						}
						else{
							$page=$_GET['page'];
						}
						
						$first_item=($page-1)*$results;
						
						$sql = "SELECT * FROM customers LIMIT ".$first_item.",".$results;
						$execute = mysqli_query($connection,$sql);
						
						if(mysqli_num_rows($execute) >0 ){
								while($row=mysqli_fetch_array($execute)){
					?>
					<tr>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['surname'] ?></td>
						<td><?php echo $row['city'] ?></td>
						<td><?php if($row['fm']=='m'){echo "Mężczyzna";}else if($row['fm']=='k'){echo "Kobieta";}?></td>
						<td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Aktualizuj</a>&nbsp;<a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Usuń</a></td>
					</tr>	
					<?php }
						}
					?>
				</tbody>
			</table>
			<?php
				for($page=1;$page<=$pages;$page++){
					echo '<a href="index.php?page='.$page.'" class="btn btn-dark">'.$page.'</a>&nbsp';
				}
			?>
		</div>
	</body>
</html>
