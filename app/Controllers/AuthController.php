<?php
namespace App\Controllers;
use App\Models\User;
use Respect\Validation\Validator as validacion;
use Zend\Diactoros\Response\RedirectResponse;
class AuthController extends BaseController
{
  public function getLogin()
  {
    return $this->rendetHTML('login.twig');
  }

  public function postLogin($request)
  {
    $postData = $request->getParsedBody();
    $responseMessage = null;
    $user = User::where('email', $postData['email'])->first();
    $contrasena = $postData['password'];

    if ($user) {
      if (password_verify($contrasena, $user->password)) {

        $_SESSION['userId'] = $user->id;
        return new RedirectResponse('admin');

      }else {
        $responseMessage = "Datos Incorrectos";
      }
    }else{
        $responseMessage = "Email no registrado..";
    }

    return $this->rendetHTML('login.twig',[
      'responseMessage' => $responseMessage
    ]);
  }

  public function getLogout(){
    unset($_SESSION['userId']);//unset limpia la variable
    return new RedirectResponse('login');
  }


}
