<?php
namespace App\Controllers;
use App\Models\User;
class AdminController extends BaseController
{
  public function getIndex(){
    return $this->rendetHTML('admin.twig');
  }
}
