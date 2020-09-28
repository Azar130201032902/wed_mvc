<?php
/*
  ./app/vues/categories/addForm.php
  Variable disponible:
    /
 */
?>
<h1>Ajout d'une catégories</h1>
<div>
  <a href="categories">Retour à la liste des catégories</a>
</div>
<form action="categories/add/insert" method="post">
  <div>
    <label for="name">Nom de la catégorie</label>
    <input type="text" name="name" id="name" />
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
