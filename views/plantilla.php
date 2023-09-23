<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi proyecto en PHP</title>

	<!-- Plugins de css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Para fontawesome -->
	<script src="https://kit.fontawesome.com/95e94bf002.js" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<h3 class="text-center">Mi proyecto</h3>
		</div>
	</div>

	<div class="container-fluid bg-light">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">

				<?php 
				if (isset($_GET["pagina"])) {
					?>


					<li class="nav-item">
						<a 

						<?php if ($_GET['pagina'] == "ingreso"): ?>

							class="nav-link active"

						<?php else: ?>

							class="nav-link"

						<?php endif ?> 

						href="index.php?pagina=ingreso">INGRESO</a>
					</li>
					<li class="nav-item">
						<a 

						<?php if ($_GET['pagina'] == "inicio"): ?>

							class="nav-link active"

						<?php else: ?>

							class="nav-link"

						<?php endif ?> 

						href="index.php?pagina=inicio">INICIO</a>
					</li>
					<li class="nav-item">
						<a 

						<?php if ($_GET['pagina'] == "registro"): ?>

							class="nav-link active"

						<?php else: ?>

							class="nav-link"

						<?php endif ?> 
						href="index.php?pagina=registro">REGISTROS</a>
					</li>
					<li class="nav-item">
						<a 

						<?php if ($_GET['pagina'] == "salir"): ?>

							class="nav-link active"

						<?php else: ?>

							class="nav-link"

						<?php endif ?> 
						href="index.php?pagina=salir">SALIR</a>
					</li>
					<?php 

				} else {

					?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=ingreso">INGRESO</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">INICIO</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=registro">REGISTROS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=salir">SALIR</a>
					</li>

					<?php 

				}

				?>


			</ul>
		</div>
	</div>

	<div class="container-fluid py-5">
		<div class="container">

			<?php 

			if (isset($_GET['pagina'])) {

				if ($_GET['pagina'] == "inicio" || $_GET['pagina'] == "ingreso" || $_GET['pagina'] == "registro" || $_GET['pagina'] == "salir" || $_GET['pagina'] == "editar") {

					include "paginas/".$_GET['pagina'].".php"; 

				} else {
					include "paginas/error404.php"; 
				}

			}else{
				include("paginas/registro.php"); 
			}



			?>

		</div>
	</div>

</body>
</html>