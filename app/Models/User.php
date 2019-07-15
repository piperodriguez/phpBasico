<?php

	namespace App\Models;

	/**
	 * @author Felipe Rodríguez
	 */

use Illuminate\Database\Eloquent\Model;

	class User extends Model
	{
		public $timestamps = false;
		protected $table = 'usuarios';

	}
