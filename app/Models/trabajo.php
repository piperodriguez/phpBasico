<?php

	namespace App\Models;

	//agregar eloquent bd conexion
	use Illuminate\Database\Eloquent\Model;
	/**
	 * @author Felipe Rodríguez
	 */



	class trabajo extends Model
	{

		//definimos la tabla que vamos a utilizar
		protected $table = 'proyectos';
		//public $timestamps = false;

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
