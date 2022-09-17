<?php
$dom = new DOMDocument();
$html = @$dom->loadHTMLFile('index.php');

$text_area = $dom->getElementById('text');
$textarea_value = $text_area->nodeValue;
echo $textarea_value;

// require 'Methods.php';
// $methods = new Methods();
// if (isset($_POST['read'])) {
// 	echo $methods->read();
// }
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
				<textarea class="form-control mb-2 text-area" name="text" id="text" placeholder="Texto"><?php echo htmlspecialchars("ola"); ?></textarea>
				<section class="buttons-container mb-5">
					<input class="btn btn-primary" type="submit" name="read" value="Leer">
					<input class="btn btn-primary" type="submit" name="write" value="Agregar">
					<input class="btn btn-primary" type="submit" name="update" value="Actualizar">
					<input class="btn btn-primary" type="submit" name="delete" value="Borrar">
				</section>
			</form>
		</section>
	</main>

	<footer class="footer-container">
		<p>&copy; 2022 - <strong>Alumno: Elí Valencia - 2019VM607</strong></p>
	</footer>
</body>

</html>