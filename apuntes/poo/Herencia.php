<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Herencia y Polimorfismo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
         crossorigin="anonymous">
</head>
<body style="font-size: 18px;">
	<div class="container">
		<h1>herencia</h1>
		<p>
			La herencia permite que ciertas clases tengan características de una clase padre. Esta clase se llamará hijo.
			<br>
			Como una buena práctica en PHP lo mejor es tener dividido el código en diferentes archivos. Justo esto es lo que haremos con la definición de la clase Jobs que ahora deberá tener el mismo nombre del archivo, este será BaseElement.php.
			<br>
			Ahora en otro archivo crearemos la clase Job que será hija de BaseElement.php. La herencia la expresaremos con la palabra reservada extends.
			<br>
			Es muy conveniente utilizar require_once cuando queremos utilizar herencia e incluir clases que están en otros archivos.
			<br>
			Dentro de nuestra clase hijo podemos sobrescribir algún método del padre, esto es un concepto que conocemos como polimorfismo. Lo que polimorfismo quiere decir es que tendremos un método que va a funcionar de acuerdo con su contexto donde es llamado.
			<br>
			Si tenemos propiedades con la palabra private en nuestra clase padre, desde nuestra clase hija no podremos acceder a esta propiedad, pero si queremos que siga siendo privada y que las clases hijas tengan acceso podemos usar la palabra clave protected.
		</p>
		<br>
		<h1>Herencia y polimorfismo</h1>
		<p>
			Cuando trabajamos con objetos y clases, algunas veces podemos encontrarnos con clases que son muy similares, incluso que comparten algunos métodos o propiedades, pero que no son completamente iguales.
		</p>
		<p>
			En este punto hablaremos de la Herencia, un concepto que nos permitirá reutilizar todo las partes que son comunes y nos permitirá tener lo que no es común en clases separadas.
		</p>
		<p>
			La Herencia funciona como una cadena de herencia, es decir podemos tener una clase y generar una “clase hija” a partir de ella, la clase “hija” reutilizara todas las propiedades y métodos de la clase “padre” y además le permitirá implementar esas partes que la hacen diferente.
		</p>
		<p>
			Por ejemplo, pensemos que estamos construyendo un sistema de comercio electrónico que maneja libros digitales y álbumes musicales, para esto podríamos generar una cadena de herencia como la siguiente:
		</p>
		<img src="../img/poo/Herencia.png" class="img-responsive">
		<p>
			En este ejemplo, un libro es diferente a un álbum en algunas cosas, sin embargo existen ciertas propiedades que se comparten a través de la clase padre Product, de este modo ambas clases comparten las propiedades y métodos de Product pero además de eso implementan propiedades y métodos únicos.
		</p>
		<p>
			Ahora vamos a hablar de un concepto adicional, el cual también es muy importante, el término es <b>polimorfismo</b> y significa “muchas formas”.
		</p>
			Vamos a pensar que queremos calcular la ganancia que obtendremos de la venta de ciertos productos, y en este caso los libros y los álbumes manejan diferentes porcentajes de ganancia, si generamos un método getProfit en la clase Product este método podría definir cuánto ganaremos de cada producto. Por ejemplo pensemos que ganamos 10%.<p>
		</p>
		<div class="jumbotron">
			public function getProfit() {<br>
				return $price * 0.1;<br>
			}
		</div>
		<p>
			El agregar este método dentro de Product nos permitirá usarlo en objetos de la clase Product y también en objetos basados en las clases hijas de Product, ahora, vamos a pensar que los libros manejan una fórmula diferente porque maneja un valor de bonus adicional, en este caso podríamos tener el método getProfit pero ahora declarado dentro de la clase Book y utilizando la lógica única de esta clase:
		</p>
		<div class="jumbotron">
			public function getProfit() {<br>
				return $price * (0.1 + $this->profitBonus);<br>
			}
		</div>
		<p>
			Este concepto es un tipo de polimorfismo el cual llamamos Sobreescritura y lo que nos permite es reemplazar algo que ya estaba definido en una clase padre.
		</p>
	</div>
</body>
</html>