<?php

	namespace App\Controllers;
	use App\Models\experiencia;
	use App\Models\proyecto;
/**
 * 
 */
	class IndexController extends BaseController
	{
		public function indexAction(){

  			$jobs = experiencia::all();

  			$proyectos = proyecto::all();

   			$firstName = "Juan Felipe";
   			$LastName = "Rodríguez Vargas";
   			$completeName = $firstName." ".$LastName;
   			$limiteMeses = 600009;

   			return $this->rendetHTML('index.twig',[
   				'completeName' => $completeName,
   				'jobs' => $jobs,
   				'projects' => $proyectos 
   			]);

		}
	}




