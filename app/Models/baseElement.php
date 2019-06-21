<?php

	  /**
   *@author felipe rodriguez
   */

  class baseElement
  {

      protected $nombreProfesion;
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


