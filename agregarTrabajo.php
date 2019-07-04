<?php
	use App\Models\{trabajo};
	if (!empty($_POST)) {
		$trabajo1 = new trabajo();
		$trabajo1->titulo = $_POST["titulo"];
		$trabajo1->descripcion = $_POST["descripcion"];
		$trabajo1->meses = $_POST["meses"];
		$trabajo1->save();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Work</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
          crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 align="center"><?="Agregar Trabajo"?></h1>
		</div>
		<div class="row">
			<div class="col-md-5">
				<form  action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" name="titulo" class="form-control">		
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" class="form-control">
							
						</textarea>	
					</div>
					<div class="form-group">
						<label for="meses">Meses</label>
						<input type="text" name="meses" class="form-control">	
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-dark">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>