<?php
/*
 * Base Controller
 * Loads the models and Views
 */

class Controller
{
  // load modal
  public function model($model)
  {
    // require model file
    require_once __DIR__ . '/../models/' . $model . '.php';

    // Instantiate model

    return new $model();
  }

  // Load view
  public function view($view, $data = [])
  {
    // Check for view file
    if (file_exists(__DIR__ . '/../views/' . $view . '.php')) {
      require_once __DIR__ . '/../views/' . $view . '.php';
    } else {
      die($view . ' View does not exist');
    }
  }
}