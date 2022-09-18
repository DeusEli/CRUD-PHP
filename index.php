<?php
if (is_writeable("./bin/text.txt")) {
	$file = "./bin/text.txt";
	$handle = fopen($file, "r+");
	$file_size = filesize($file);
	if ($file_size > 0) {
		$file_content = fread($handle, $file_size);
	} else {
		$file_content = "";
	}
} else {
	echo "File does not exist.";
	$file_content = "";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD PHP - Valencia</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<header class="header-container">
		<h1>Header Queso</h1>
	</header>
	<main class="main-container">
		<section class="form-container">
			<form class="" action="" method="POST">
				<textarea class="form-control mb-2 text-area" name="text" id="text" placeholder="Texto">
					<?php echo $file_content; ?>
				</textarea>
				<section class="buttons-container mb-5">
					<input type="submit" formaction="./bin/create.php" class="btn btn-primary" value="Create">
					<input type="submit" formaction="./bin/delete.php" class="btn btn-primary" value="Delete">
					<input type="submit" formaction="./bin/write.php" class="btn btn-primary" value="Write">
					<input type="submit" formaction="./bin/update.php" class="btn btn-primary" value="Update">
				</section>
			</form>
		</section>
	</main>

	<footer class="footer-container">
		<p>&copy; 2022 - <strong>Alumno: Elí Valencia - 2019VM607</strong></p>
	</footer>
</body>

</html>