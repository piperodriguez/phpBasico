<?php
namespace App\Controllers;
/**
 * 
 */
use Zend\Diactoros\Response\HtmlResponse;

class BaseController
{ 
	
	protected $_templateEngine;

	public function __construct(){

		$loader = new \Twig\Loader\FilesystemLoader('../views');

		$this->_templateEngine = new \Twig\Environment($loader, [
			'debug' => true,
    		'cache' => false,
		]);
	}
	

	public function rendetHTML($filename, $data = [])
	{
		return new HtmlResponse($this->_templateEngine->render($filename, $data));
	}
}