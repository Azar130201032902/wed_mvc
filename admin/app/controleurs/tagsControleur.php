<?php
/*
  ./app/controleurs/tagsControleur.php
  CONTROLEUR DES TAGS
 */
namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des tags
      include_once '../app/modeles/tagsModele.php';
      $tags = TagsModele\findAll($connexion);
    // Je la mets directement dans la vue index
    include_once '../app/vues/tags/index.php';
  }
