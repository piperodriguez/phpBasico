<?php

	namespace App\Models;

	/**
	 * @author Felipe Rodríguez
	 */

use Illuminate\Database\Eloquent\Model;

	class experiencia extends Model
	{
		
		protected $table = 'trabajos';
		

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
