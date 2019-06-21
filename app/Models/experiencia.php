<?php
	require_once'baseElement.php';
	/**
	 * @author Felipe Rodríguez
	 */
	class experiencia extends baseElement
	{

		function __construct($nombreProfesion, $descripcion)
		{
			$labelProfesion = 'Habilidades : '.$nombreProfesion;
			$this->nombreProfesion = $labelProfesion;
			$this->descripcion = $descripcion;
			//parent::__construct($labelProfesion, $descripcion);
		}

      public function obtenerTiempoLaborado()
      {
	        $year = floor($this->meses / 12);
	        //para aproximar el numero y no dejarlo con tantosdecimales utilizamos floor
	        $meseExtra = $this->meses % 12;

	        if($year == 0){

	          return ("Tiempo Laborado : $meses meses");

	        }elseif($meseExtra == 0){

	          return ("Tiempo Laborado : $year años");

	        }elseif($year  == 1 && $meseExtra == 1){


	        	return ("Tiempo Laborado : $year año y $meseExtra mes");

	        }else{

	          return ("Tiempo Laborado : $year años y $meseExtra meses");

	        }
      }

	}
