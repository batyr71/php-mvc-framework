<?php
/* BASE CONTROLLER FOR MODELS AND VIEWS */

class Controller {
  //MODEL
  public function model($model){
    require_once '../app/models/' . $model . '.php';
    return new $model();
  }

  // VIEW
  public function view($view, $data = []){
    if(file_exists('../app/views/' . $view . '.php')){
      require_once '../app/views/' . $view . '.php';
    } else {
      die('404 Page does not exist');
    }
  }
}