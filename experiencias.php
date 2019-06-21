<?php

  require 'app/Models/experiencia.php';
  require 'app/Models/proyecto.php';

  //le enviamos los datos al constructor como parametros

  $job1 = new experiencia('PHP Developer', 'Desarrollador en Solati Empresa que ofrece un software de gestión de cobranza Adminfo.');
  $job1->meses = 48;


  $job2 = new experiencia('JavaScript Developer','Manejo del lenguajes de programacion JavaScript junto con herramientas del mismo como jquery, angulas, nodejs, reac native');
  $job2->meses = 24;

  $job3 = new experiencia('Front End Developer','Creador de interfaz graficas responsives para los diferentes tamaños de sus dispositivos');//Front End Developer
  $job3->meses = 13;


  $proyecto1 = new proyecto('Soef','Soluciones eficientes una agencia de empleos enfocada para el departamento de Boyaca');

  $proyecto2 = new proyecto('Gestión de Desempeño','Software enfocado en llevar el seguimiento del personal de Solati segun sus los indicadores de cada cargo que existe en la empresa');

  $jobs = [
      $job1,
      $job2,
      $job3

  ];

  $proyectos = [
    $proyecto1,
    $proyecto2
  ];


  function imprimirElemento($job)
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



