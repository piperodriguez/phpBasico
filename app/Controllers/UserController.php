<?php
namespace App\Controllers;
use App\Models\User;
use Respect\Validation\Validator as validacion;

class UserController extends BaseController
{
  public function index()
  {
    $responseMessage = null;
    return $this->rendetHTML('agregarUsuario.twig',[

        'responseMessage' => $responseMessage
    ]);
  }

  public function save($request)
  {
    $responseMessage = null;

    if ($request->getMethod() == 'POST')
    {
      $postData = $request->getParsedBody();

      $formTrabajoValidator =
      validacion::key('email', validacion::email()->notEmpty())
                      ->key('password', validacion::stringType()->notEmpty());
      try{
        $formTrabajoValidator->assert($postData);
        $postData = $request->getParsedBody();


        $files = $request->getUploadedFiles();
        $imagen = $files['imgUser'];

        if ($imagen->getError()== UPLOAD_ERR_OK) {
          $fileName = $imagen->getClientFilename();
          $imagen->moveTo("uploads/$fileName");
        }

        $cadenaPass = $postData["password"];
        $contrasena = password_hash($cadenaPass, PASSWORD_DEFAULT);

        $trabajo = new User();
        $trabajo->email = $postData["email"];
        $trabajo->password = $contrasena;
        $trabajo->img = $fileName;
        $trabajo->save();
        $responseMessage = 'se guardo la información correctamente';
      } catch (\Exception $e){
        $responseMessage = $e->getMessage();
      }

    }
      return $this->rendetHTML('agregarUsuario.twig',[

          'responseMessage' => $responseMessage
      ]);
  }
}
