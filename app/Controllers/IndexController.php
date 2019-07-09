<?php

	namespace App\Controllers;
	use App\Models\experiencia;
	use App\Models\proyecto;
/**
 * 
 */
	class IndexController 
	{
		public function indexAction(){

  			$jobs = experiencia::all();

  			$proyectos = proyecto::all();

   			$firstName = "Juan Felipe";
   			$LastName = "Rodríguez Vargas";
   			$completeName = $firstName." ".$LastName;
   			$limiteMeses = 600009;

   			include ' ../views/index.php';

		}
	}




