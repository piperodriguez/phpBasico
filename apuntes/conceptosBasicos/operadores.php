<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="jumbotron jumbotron-fluid">
			<h1 align="center">Operadores</h1>
		</div>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="../index.php"><img src="../img/home.png" style="width: 15%;"></a>
		  <a href="#aritméticos">Operadores aritméticos</a>
		</nav>
		<p>
			Antes de continuar hablando de operadores es importante mencionar que existe un concepto conocido como precedencia de operadores el cual nos permitirá saber en qué orden se deben ejecutar los operadores que se encuentren en una sola sentencia.
		</p>
		<br>

			Por ejemplo, en la sentencia:
			<br>
			1 + 2 * 3
			<br>
			Se ejecutará primero la operación 2 * 3 <br>
			Luego se ejecutará la suma con 1 <br>
			<br>
			Esto es debido a que * tiene más valor en la precedencia que el +.
			<br>
			Una forma sencilla de controlar la precedencia es utilizando () paréntesis, de esta forma podemos forzar el orden que nosotros queramos, por ejemplo (1 + 2) * 3 será una versión diferente y se ejecutará primero la suma y luego la multiplicación.

		<br><br>
		<div class="alert alert-dark" id="aritméticos">
    		<strong>Operadores aritméticos!</strong>
  		</div>
  		<img src="../img/basic/operadoresAritmeticos.png">
  		<br>
		<div class="alert alert-dark">
    		<strong>Operadores de asignación!</strong>
  		</div>
  		<p>
			Antes de continuar hablando de operadores es importante mencionar que existe un concepto conocido como precedencia de operadores el cual nos permitirá saber en qué orden se deben ejecutar los operadores que se encuentren en una sola sentencia.
  		</p>
  		<br>

  			Por ejemplo, en la sentencia:
  			<br>
			1 + 2 * 3
			<br>
			Se ejecutará primero la operación 2 * 3<br>
			Luego se ejecutará la suma con 1
			<br>
			Esto es debido a que * tiene más valor en la precedencia que el +.
			<br>
			Una forma sencilla de controlar la precedencia es utilizando () paréntesis, de esta forma podemos forzar el orden que nosotros queramos, por ejemplo (1 + 2) * 3 será una versión diferente y se ejecutará primero la suma y luego la multiplicación.

  		<br><br><br>
		<div class="alert alert-dark">
    		<strong>Operadores de comparación  !</strong>
  		</div>
  		<img src="../img/basic/OperadoresComparacion.png">
  		<br><br><br>
		<div class="alert alert-dark">
    		<strong>Operadores de incremento/decremento!</strong>
  		</div>
  		<p>Permiten incrementar o decrementar un valor en 1.</p>
  		<img src="../img/basic/OperadoresIncrementoDecremento.png">
  		<img src="../img/basic/ejemploDecremento.png">
  		<br><br><br>
		<div class="alert alert-dark">
    		<strong>Operadores lógicos!</strong>
  		</div>
  		<p>Nos permiten combinar resultados de comparaciones.</p>
  		<img src="../img/basic/OperadoresLOgicoas.png">
  		<br><br><br>
		<div class="alert alert-dark">
    		<strong>Operadores para arrays!</strong>
  		</div>
  		<img src="../img/basic/OperadoresArrays.png">
	</div>
</body>
</html>