<?php
namespace Dsw\Fct\Controllers;

require_once('../src/connection.php');

use Dsw\Fct\models\Companie;


class companieController extends Controller{
  public function list() {
    $companies = Companie::all();
    $router = $this->router;
    echo $this->blade->make("companie.list", compact('companies' , 'router'))->render();
    
  }

  public function search(){
    $companies = Companie::where([
      ["description", $_POST["description"]]
    ]);

    foreach ($companies as $companie) {
      echo "<p>$companie</p>";
    }

    // $router = $this->router;
    // echo $this->blade->make("companie.search", compact("companie","router"))->render();
   
  }
}