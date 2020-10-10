<?php
/*
  ./noyau/contantes.php
  Constantes du framework
 */


// BASE URL
  $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
  define('BASE_URL_ADMIN', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);

// BASE URL BACKOFFICE
  define('BASE_URL_PUBLIC', str_replace('admin','public',BASE_URL_ADMIN));
