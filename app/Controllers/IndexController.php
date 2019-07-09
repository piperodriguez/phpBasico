<?php


namespace App\Controllers;

/**
 * 
 */
class IndexController 
{
	public function indexAction(){
		
		$num1 = 2019;
		$num2 = 1996;

		$edad = $num1-$num2;

		echo "Mi edad es ".$edad;

	}
}