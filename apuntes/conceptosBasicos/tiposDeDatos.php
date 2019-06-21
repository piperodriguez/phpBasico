<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <title>Tipos de datos</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <h2>Tipos de datos con Php ☺</h2>
         <p><strong>Data Types</strong> de <strong>lenguaje</strong> PHP cuenta con muchos tipos de datos, sin embargo, en este momento nos vamos a enfocar en los más importantes y utilizados que son boolean, integer, float, string, array y NULL..</p>
         <h1>Tipos escalares:</h1>
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Boolean:</a>
                  </h4>
               </div>
               <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">Representa solamente un valor verdadero o falso.	<a href="http://php.net/manual/es/language.types.boolean.php">http://php.net/manual/es/language.types.boolean.php</a>
                     Valores válidos: true (verdadero) false (falso).
                     <br>
                     <b>$a = true; <br>
                     $b = false;</b>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Intenger</a>
                  </h4>
               </div>
               <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Representa un número entero positivo, negativo o 0. http://php.net/manual/es/language.types.integer.php.
                     <br><b>$a = -123;<br>
                     $b = 0;<br>
                     $c = 7763;</b>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Floar o double</a>
                  </h4>
               </div>
               <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras. <a href="http://php.net/manual/es/language.types.float.php">http://php.net/manual/es/language.types.float.php</a>
                     <br>
                     <b>
                     $a = 12.24; <br>
                     $b = 1.5e3; <br>s
                     $c = 7E-10;
                     </b>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">String</a>
                  </h4>
               </div>
               <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">
                     <ul>
                        <li>Representa una cadena de caracteres.</li>
                        <li>Existen 4 formas de representar una cadena. Las 2 principales son usando comillas simples o comillas dobles.</li>
                        <li>Usando comillas simples donde el texto será exactamente como se escribe.</li>
                        <li>Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.</li>
                        <li>Hay 2 formas adicionales llamadas Heredoc y Nowdoc que sirven para crear cadenas de múltiples líneas.</li>
                     </ul>
                     <br>
                     $a = ”Hola”;<br> 
                     $b = ‘Mundo’;
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Floar o double</a>
                  </h4>
               </div>
               <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras. <a href="http://php.net/manual/es/language.types.float.php">http://php.net/manual/es/language.types.float.php</a>
                     <br>
                     <b>
                     $a = 12.24; <br>
                     $b = 1.5e3; <br>s
                     $c = 7E-10;
                     </b>
                  </div>
               </div>
            </div>
            <h1>Tipos compuestos:</h1>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">array</a>
                  </h4>
               </div>
               <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array. <a href="http://php.net/manual/es/language.types.array.php">http://php.net/manual/es/language.types.array.php</a>
                     <br>
                     <b>
                     $array = array(
                     "curso1" => "php",
                     "curso2" => "js",
                     );<br>
                     // a partir de PHP 5.4
                     $array = [
                     "curso1" => "php",
                     "curso2" => "js",
                     ];
                     <br>
                     // índices numéricos
                     $array = [
                     "php",
                     "js",
                     ];
                     </b>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">object</a>
                  </h4>
               </div>
               <div id="collapse7" class="panel-collapse collapse">
                  <div class="panel-body">Representa una instancia de una clase. Este tema lo veremos más a fondo en la clase de Programación Orientada a Objetos.</a>
                     <br>
                     <b>
                     class Car <br>	
                     {<br>
                     &nbsp;function move()<br>
                     &nbsp;&nbsp;{<br>
                     A        &nbsp;&nbsp;&nbsp;echo "Going forward...";<br> 
                     &nbsp;&nbsp;}<br>
                     }<br>
                     &nbsp;$myCar = new Car();<br>
                     &nbsp;$myCar->move();
                     </b>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">callable</a>
                  </h4>
               </div>
               <div id="collapse9" class="panel-collapse collapse">
                  <div class="panel-body">Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método..
                     <br>
                     <b>
                     $firstOfArray = function(array $array) { <br>	
                     <br>
                     &nbsp;if (count($array) == 0) { return null; }<br>
                     &nbsp;&nbsp;<br>
                     A        &nbsp;&nbsp;&nbsp;if (count($array) == 0) { return null; }<br> 
                     &nbsp;&nbsp;&nbsp;return $array[0];<br>
                     <br>
                     &nbsp;};<br>
                  	// Este es nuestro arreglo <br>
					$values = [3, 2, 1];<br>
					// Usamos nuestro callable y se imprime el valor 3 	<br>
					echo $firstOfArray($values);
                     </b>
					<?php
					// Variable que guarda un callable
					$firstOfArray = function(array $array) {
					    if (count($array) == 0) { return null; }
					    return $array[0];
					};

					// Este es nuestro arreglo
					$values = [3, 2, 1];

					// Usamos nuestro callable y se imprime el valor 3
					echo $firstOfArray($values);
					?>                     
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">iterable</a>
                  </h4>
               </div>
               <div id="collapse10" class="panel-collapse collapse">
                  <div class="panel-body">Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método..
                     <br>
                   	<img src="../img/basic/tipodatoiterable.png">
                  </div>
               </div>
            </div>
            <h1>Tipos especiales:</h1>
            <br>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Resource</a>
                  </h4>
               </div>
               <div id="collapse11" class="panel-collapse collapse">
                  <div class="panel-body">Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.
                     <br>
                   	<img src="../img/basic/tipodatoresource.png">
                  </div>
               </div>
            </div>            
      </div>
   </body>
</html>



