<?php

  use App\Models\{experiencia,proyecto};

  require_once 'vendor/autoload.php';


  $jobs = experiencia::all();

  $proyectos = proyecto::all();


  function imprimirElemento($job)
  {

     /* if ($job->visible == false) {
        return;//si se cumple la condicion salte de la funcion
      }*/

      echo '<li class="work-position">';
        echo '<h5>'. $job->titulo. '</h5>';
        echo '<p>'. $job->descripcion .'</p>';
        echo '<p>'. $job->obtenerTiempoLaborado() . '</p>';
        echo '<strong>Funciones:</strong>';
        echo '<ul>';
        echo '<li>Desarrollar aplicaciones web.</li>';
        echo '<li>Brindar soporte</li>';
        echo '<li>Crear tablas de retención documental</li>';
        echo '</ul>';
      echo ' </li>';
    }



