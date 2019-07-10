<?php

namespace App\Controllers;
use App\Models\experiencia;
/**
 * 
 */
class TrabajoController
{
	public function getAddTrabajoAction($request){


		if ($request->getMethod() == 'POST')
		{
			$postData = $request->getParsedBody();
			$trabajo = new experiencia();
			$trabajo->titulo = $postData["titulo"];
			$trabajo->descripcion = $postData["descripcion"];
			$trabajo->meses = $postData["meses"];
			$trabajo->save();

		}

		include '../views/agregarTrabajo.php';

	}

}