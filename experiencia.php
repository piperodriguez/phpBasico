<?php

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



