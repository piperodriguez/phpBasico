<?php

namespace App\Controllers;
use App\Models\experiencia;
/**
 * 
 */
class TrabajoController
{
	public function getAddTrabajoAction(){

		if (!empty($_POST)) {
			$trabajo1 = new experiencia();
			$trabajo1->titulo = $_POST["titulo"];
			$trabajo1->descripcion = $_POST["descripcion"];
			$trabajo1->meses = $_POST["meses"];
			$trabajo1->save();

		}

		include '../views/agregarTrabajo.php';

	}

}