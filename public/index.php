<?php

ini_set('display_errors', 1);//inicializa la vizualizacion de errores
ini_set('display_starup_error', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';//traemos lo del composer
//conexion a la base de datos
use Illuminate\Database\Capsule\Manager as Capsule;
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

	var_dump($request->getUri()->getPath());