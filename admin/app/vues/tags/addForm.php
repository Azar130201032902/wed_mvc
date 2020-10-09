<?php
/*
  ./app/vues/categories/addForm.php
  Variable disponible:
    /
 */
?>
<h1>Ajout d'un tag</h1>
<div>
  <a href="tags">Retour à la liste des tags</a>
</div>
<form action="tags/add/insert" method="post">
  <div>
    <label for="name">Nom du tag</label>
    <input type="text" name="name" id="name" />
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
