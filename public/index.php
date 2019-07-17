<?php

ini_set('display_errors', 1);//inicializa la vizualizacion de errores
ini_set('display_starup_error', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';//traemos lo del composer
session_start();//decimos que se van a utilizar sessiones
//conexion a la base de datos
use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;


	$capsule = new Capsule;
	$capsule->addConnection([
	    'host'      => 'localhost',
			'driver'    => 'mysql',
	    'database'  => 'cursophp',
	    'username'  => 'root',
	    'password'  => '',
	    'charset'   => 'utf8',
	    'collation' => 'utf8_unicode_ci',
	    'prefix'    => '',
	]);

	$capsule->setAsGlobal();
	$capsule->bootEloquent();

	$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
	    $_SERVER,
	    $_GET,
	    $_POST,
	    $_COOKIE,
	    $_FILES
	);

	$routerContainer = new RouterContainer();
	$map = $routerContainer->getMap();


	$map->get('index', '/phpBasico/', [
		'controller' => 'App\Controllers\IndexController',
		'action' => 'indexAction'
	]);

	$map->get('addJobs', '/phpBasico/add/job', [
		'controller' => 'App\Controllers\TrabajoController',
		'action' => 'getAddTrabajoAction',
		'autenticacion' => true
	]);


	$map->post('saveJobs', '/phpBasico/add/save', [
		'controller' => 'App\Controllers\TrabajoController',
		'action' => 'getAddTrabajoAction'
	]);


	$map->get('addUsers', '/phpBasico/add/user', [
		'controller' => 'App\Controllers\UserController',
		'action' => 'index',
		'autenticacion' => true
	]);

	$map->post('saveUsers', '/phpBasico/add/save/usuario', [
		'controller' => 'App\Controllers\UserController',
		'action' => 'save'
	]);


	$map->get('loginForm', '/phpBasico/login', [
		'controller' => 'App\Controllers\AuthController',
		'action' => 'getLogin'
	]);

	$map->post('auth', '/phpBasico/auth', [
		'controller' => 'App\Controllers\AuthController',
		'action' => 'postLogin',
	]);

	$map->get('admin', '/phpBasico/admin', [
		'controller' => 'App\Controllers\AdminController',
		'action' => 'getIndex',
		'autenticacion' => true
	]);

	$map->get('logout', '/phpBasico/logout', [
		'controller' => 'App\Controllers\AuthController',
		'action' => 'getLogout'
	]);


	$matcher = $routerContainer->getMatcher();
	$route = $matcher->match($request);


  function imprimirElemento($job)
  {

     /* if ($job->visible == false) {
        return;//si se cumple la condicion salte de la funcion
      }*/

      echo '<li class="work-position">';
        echo '<h5>'. $job->titulo. '</h5>';
        echo '<p>'. $job->descripcion .'</p>';
        echo '<p>'. $job->obtenerTiempoLaborado() . '</p>';
        echo '<strong>Funciones:</strong>';
        echo '<ul>';
        echo '<li>Desarrollar aplicaciones web.</li>';
        echo '<li>Brindar soporte</li>';
        echo '<li>Crear tablas de retención documental</li>';
        echo '</ul>';
      echo ' </li>';
    }


	if (!$route) {
		echo "no se encuentra el resultado";
	}else{

		$handlerData = $route->handler;
		$controllerName = $handlerData['controller'];
		$actionName = $handlerData['action'];
		$autenticacion = $handlerData['autenticacion'] ?? false;

		$sessionUserId = $_SESSION['userId'] ?? null;
		if ($autenticacion && !$sessionUserId) {
			echo "Acceso restringido";
			die();
		}


		$controller = new $controllerName;
		$response = $controller->$actionName($request);

		foreach ($response->getHeaders() as $name => $values) {
			foreach ($values as $value) {
				header(sprintf('%s: %s', $name, $value), false);

			}
		}
		http_response_code($response->getStatusCode());
		echo $response->getBody();
	}
