<?php
function debug($array, $die = false)
{
  echo '<pre style="font-size: 12px; color: green; ">';
  print_r($array);
  echo '</pre>';

  if ($die) die;
}

function debugVarDump($array)
{
  echo '<pre>';
  var_dump($array);
  echo '</pre>';
}

function redirect($http = false)
{
  if ($http) {
    $redirect = $http;
  } else {
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
  }
  header("Location: $redirect");
  exit;
}

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);
}

function isLoggedIn()
{
  if (isset($_SESSION['user_id'])) {
    return true;
  } else {
    return false;
  }
}
