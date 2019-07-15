<?php
namespace App\Controllers;
use App\Models\experiencia;
use Respect\Validation\Validator as validacion;

class TrabajoController extends BaseController
{
	public function getAddTrabajoAction($request)
  {
      $responseMessage = null;

  		if ($request->getMethod() == 'POST')
  		{
  			$postData = $request->getParsedBody();

  			$formTrabajoValidator =
  			validacion::key('titulo', validacion::stringType()->notEmpty())
                    		->key('descripcion', validacion::stringType()->notEmpty())
                    		->key('meses', validacion::stringType()->notEmpty());
        try{
          $formTrabajoValidator->assert($postData);
					$postData = $request->getParsedBody();


					$files = $request->getUploadedFiles();
					$imagen = $files['logo'];

					if ($imagen->getError()== UPLOAD_ERR_OK) {
						$fileName = $imagen->getClientFilename();
						$imagen->moveTo("uploads/$fileName");
					}
        	$trabajo = new experiencia();
    			$trabajo->titulo = $postData["titulo"];
    			$trabajo->descripcion = $postData["descripcion"];
    			$trabajo->meses = $postData["meses"];
					$trabajo->logo = $fileName;
    			$trabajo->save();
          $responseMessage = 'se guardo la información correctamente';
        } catch (\Exception $e){
          $responseMessage = $e->getMessage();
        }

  		}
		    return $this->rendetHTML('agregarTrabajo.twig',[

            'responseMessage' => $responseMessage
        ]);
	}

}
