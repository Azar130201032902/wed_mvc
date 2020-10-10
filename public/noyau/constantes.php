<?php
/*
  ./noyau/contantes.php
  Constantes du framework
 */


// BASE URL
  $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
  define('BASE_URL_PUBLIC', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);

// BASE URL BACKOFFICE
  define('BASE_URL_ADMIN', str_replace('public','admin',BASE_URL_PUBLIC));
