<?php

  /**
   *
   */
  class experienciaLaboral
  {

      private $nombreProfesion;
      public $descripcion;
      public $visible;
      public $meses;

      public function conjuntoProfesiones($nombreProfesion)
      {
        $this->nombreProfesion = $nombreProfesion;
      }

      public function obtenerProfesion()
      {
        return $this->nombreProfesion;
      }
  }

  $job1 = new experienciaLaboral();
  $job1->conjuntoProfesiones('PHP Developer');
  $job1->descripcion = 'Desarrollador en Solati Empresa que ofrece un software de gestión de cobranza Adminfo.';
  $job1->visible = true;
  $job1->meses = 48;


  $job2 = new experienciaLaboral();
  $job2->conjuntoProfesiones('JavaScript Developer');
  $job2->descripcion = 'Manejo del lenguajes de programacion JavaScript junto con herramientas del mismo como jquery, angulas, nodejs, reac native';
  $job2->visible = true;
  $job2->meses = 24;


  $jobs = [
      $job1,
      $job2,     // $experiencia2
/*
  	[
  		'nombreProfesion'=>'Front End Developer',
  		'descripcion' => 'Creador de interfaz graficas responsives para los diferentes tamaños de sus dispositivos',
  		'visible' => true,
  		'meses' => 25
      ]/*,
      [
  		'nombreProfesion'=>'Soporte computación',
  		'descripcion' => 'aplicacion de mantenimiento preventivo y correctivo de los equipos de computo',
  		'visible' => true,
  		'meses' => 6
      ]*/
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


      if ($job->visible == false) {
        return;//si se cumple la condicion salte de la funcion
      }

      echo '<li class="work-position">';
        echo '<h5>'. $job->obtenerProfesion(). '</h5>';
        echo '<p>'. $job->descripcion.'</p>';
        echo '<p>'. obtenerTiempoLaborado($job->meses) . '</p>';
        echo '<strong>Funciones:</strong>';
        echo '<ul>';
        echo '<li>Desarrollar aplicaciones web.</li>';
        echo '<li>Brindar soporte</li>';
        echo '<li>Crear tablas de retención documental</li>';
        echo '</ul>';
      echo ' </li>';
    }



