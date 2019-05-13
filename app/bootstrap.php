<?php
  // Load Config
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/helpers/functions.php';

// Autoload Core Libraries
spl_autoload_register(function($className) {
  require_once __DIR__ . '/libraries/' . $className . '.php';
});