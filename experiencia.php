<?php

  /**
   *@author felipe rodriguez
   */

  class experienciaLaboral
  {

      private $nombreProfesion;
      public $descripcion;
      public $visible = true;
      public $meses;


      /*creamos el constructor de la clase*/

      public function __construct($nombreProfesion, $descripcion)
      {
          $this->conjuntoProfesiones($nombreProfesion);
          $this->descripcion = $descripcion;
      }

      public function conjuntoProfesiones($nombreProfesion)
      {
        /*validacion para que no acepte cadenas vacias*/
        if ($nombreProfesion == '') {
          $this->nombreProfesion = 'No se pudo encontrar el registro';
        }else{
          $this->nombreProfesion = $nombreProfesion;
        }

      }

      public function obtenerProfesion()
      {
        return $this->nombreProfesion;
      }

      public function obtenerTiempoLaborado()
      {
        $year = floor($this->meses / 12);
        //para aproximar el numero y no dejarlo con tantosdecimales utilizamos floor
        $meseExtra = $this->meses % 12;

        if($year == 0){

          return ("$meses meses");

        }elseif($meseExtra == 0){

          return ("$year años");

        }else{

          return ("$year años y $meseExtra meses");
        }

      }
  }

  //le enviamos los datos al constructor como parametros

  $job1 = new experienciaLaboral('PHP Developer', 'Desarrollador en Solati Empresa que ofrece un software de gestión de cobranza Adminfo.');
  $job1->meses = 48;


  $job2 = new experienciaLaboral('JavaScript Developer','Manejo del lenguajes de programacion JavaScript junto con herramientas del mismo como jquery, angulas, nodejs, reac native');
  $job2->meses = 24;

  $job3 = new experienciaLaboral('','Creador de interfaz graficas responsives para los diferentes tamaños de sus dispositivos');//Front End Developer
  $job3->meses = 12;


  $jobs = [
      $job1,
      $job2,
      $job3
/*

      [
  		'nombreProfesion'=>'Soporte computación',
  		'descripcion' => 'aplicacion de mantenimiento preventivo y correctivo de los equipos de computo',
  		'visible' => true,
  		'meses' => 6
      ]*/
  ];



  function imprimirExperiencia($job)
  {

      if ($job->visible == false) {
        return;//si se cumple la condicion salte de la funcion
      }

      echo '<li class="work-position">';
        echo '<h5>'. $job->obtenerProfesion(). '</h5>';
        echo '<p>'. $job->descripcion.'</p>';
        echo '<p>'. $job->obtenerTiempoLaborado($job->meses) . '</p>';
        echo '<strong>Funciones:</strong>';
        echo '<ul>';
        echo '<li>Desarrollar aplicaciones web.</li>';
        echo '<li>Brindar soporte</li>';
        echo '<li>Crear tablas de retención documental</li>';
        echo '</ul>';
      echo ' </li>';
    }



