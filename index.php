<?php

	$firstName = "Juan Felipe";
	$LastName = "Rodríguez Vargas";
	$completeName = $firstName." ".$LastName;
  $limiteMeses = 69;
	$jobs = [
    [
		  'nombreProfesion'=>'PHP Developer',
      'descripcion' => 'Desarrollador en Solati Empresa que ofrece un software de gestión de cobranza Adminfo.',
      'visible' => false,
      'meses' => 24
    ],
    [
		  'nombreProfesion'=>'JavaScript Developer',
      'descripcion' => 'Manejo del lenguajes de programacion JavaScript junto con herramientas del mismo como jquery, angulas, nodejs, reac native',
      'visible' => true,
      'meses' => 12
    ],
   [
      'nombreProfesion'=>'Front End Developer',
      'descripcion' => 'Creador de interfaz graficas responsives para los diferentes tamaños de sus dispositivos',
      'visible' => true,
      'meses' => 25
    ],
    [
      'nombreProfesion'=>'Soporte computación',
      'descripcion' => 'aplicacion de mantenimiento preventivo y correctivo de los equipos de computo',
      'visible' => true,
      'meses' => 6
    ]
	];

  function obtenerTiempoLaborado($meses)
  {
    $year = floor($meses / 12);
    //para aproximar el numero y no dejarlo con tantosdecimales utilizamos floor
    $meseExtra = $meses % 12;

    if($year == 0){

      return ("$meses meses");

    }elseif($meseExtra == 0){

      return ("$year años");

    }else{

      return ("$year años y $meseExtra meses");
    }

  }

  function imprimirExperiencia($job)
  {

      if ($job['visible'] == false) {
        return;//si se cumple la condicion salte de la funcion
      }

      echo '<li class="work-position">';
        echo '<h5>'. $job['nombreProfesion']. '</h5>';
        echo '<p>'. $job['descripcion']. '</p>';
        echo '<p>'. obtenerTiempoLaborado($job['meses']) . '</p>';
        echo '<strong>Funciones:</strong>';
        echo '<ul>';
        echo '<li>Foliar</li>';
        echo '<li>Organizar Cronologicamente los documentos.</li>';
        echo '<li>crear cuadros de clasificación Documental</li>';
        echo '<li>Crear tablas de retención documental</li>';
        echo '</ul>';
      echo ' </li>';
    }

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="img/yo.JPG" alt="">
      </div>
      <div class="col">
        <h1><?= $completeName; ?></h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Correo: vargasjuan367@gmail.com</li>
          <li>Celular: 3005511182</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @philop</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Descripción</h2>
        <p>
          Apasionado por el Desarrollo web con experiencia de 3 años en el area con conocimientos basicos para dar soporte y creación de aplicaciones web a su alcance y de acuerdo a sus necesidades
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Experiencia Laboral</h3>
          <ul>
          <?php
            $totalMeses=0;
            for($idx = 0; $idx < count($jobs); $idx++){

              $totalMeses += $jobs[$idx]['meses'];

              if ($totalMeses > $limiteMeses) {
                 break;//rompe conteo de lops meses antes que 12
              }

              imprimirExperiencia($jobs[$idx]);

            }

            ?>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <h5>Soef</h5>
                <div class="row">
                    <div class="col-3">
                        <img class="projectImg" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Sofia Plus</h5>
                <div class="row">
                    <div class="col-3">
                        <img class="projectImg" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
          <li>Angular</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Javascript</li>
            <li>Jquery</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Yii 2</li>
          <li>Bootstrap</li>
        </ul>
        <h4>DataBase</h4>
        <ul>
        	<li>Postgresql</li>
        	<li>Mysql</li>
        	<li>Oracle</li>
        </ul>
        <h4>CMS</h4>
        <ul>
        	<li>Wordpress</li>
        	<li>Joomla</li>
        </ul>
        <h3>Varios</h3>
        <ul>
        	<li>Moodle</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div class="container">
      <nav>
        <ul>
          <li><a href="conceptosBasicos/tiposDeDatos.php">Tipos de datos</a></li>
          <li><a href="conceptosBasicos/ejerciciosArreglos.php">Ejercicios Arreglos</a></li>
          <li><a href="conceptosBasicos/operadores.php">Operadores</a></li>
        </ul>
      </nav>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">

          Designed by @frodriguez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>