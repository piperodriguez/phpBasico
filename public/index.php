<?php

ini_set('display_errors', 1);//inicializa la vizualizacion de errores
ini_set('display_starup_error', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';//traemos lo del composer
//conexion a la base de datos
use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;


	$capsule = new Capsule;
	$capsule->addConnection([
	    'driver'    => 'mysql',
	    'host'      => 'localhost',
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
		'action' => 'getAddTrabajoAction'
	]);


	$map->post('saveJobs', '/phpBasico/add/save', [
		'controller' => 'App\Controllers\TrabajoController',
		'action' => 'getAddTrabajoAction'
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

		$controller = new $controllerName;
		$response = $controller->$actionName($request);
		echo $response->getBody();
	}
	