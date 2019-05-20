<?php


class Users extends Controller
{
  public function __construct()
  {

  }

  public function register()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // process form
    } else {
      // Init data
      $data = [
        'title' => 'Register',
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
      ];

      $this->view('users/register', $data);
    }
  }

  public function login()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // process form
    } else {
      // Init data
      $data = [
        'title' => 'Login',
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',

      ];

      $this->view('users/login', $data);
    }
  }
}