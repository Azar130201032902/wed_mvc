<?php
/*
  ./noyau/protection.php
  REDIRECTION EN CAS D'ACCES DIRECT AU BACKOFFICE
 */


   if(!isset($_SESSION['user'])):
     header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/public/www/users/login/form');
   endif;
