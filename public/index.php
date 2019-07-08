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


	$map->get('index', '/phpBasico/', '../index.php');
	$map->get('addJobs', '/phpBasico/add/job', '../agregarTrabajo.php');

	$matcher = $routerContainer->getMatcher();
	$route = $matcher->match($request);

	if (!$route) {
		echo "no existe la route";
	}else{
		require $route->handler;
	}
	