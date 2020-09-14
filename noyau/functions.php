<?php
/*
  ./noyau/functions.php
 */


   function slugify(string $str) {
     return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
   }
