<?php
namespace Dsw\Fct\Controllers;
require_once('../src/connection.php');
class defaultController extends Controller{
  public function home() {
    //  $blade = $this->blade;    
     $router = $this->router;
    echo $this->blade->make('home', compact('router'))->render();
  }
}