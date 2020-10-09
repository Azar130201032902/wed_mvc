<?php
/*
  ./app/vues/categories/addForm.php
  Variable disponible:
    /
 */
?>
<h1>Ajout d'un auhtor</h1>
<div>
  <a href="author">Retour à la liste des authors</a>
</div>
<form action="authors/add/insert" method="post">
  <div>
    <label for="firstname">Prénom de l'author</label>
    <input type="text" name="firstname" id="firstname" />
  </div>
  <div>
    <label for="lastname">Nom de l'author</label>
    <input type="text" name="lastname" id="lastname" />
  </div>
  <div>
    <label for="biography">Biographie de l'author</label>
    <input type="text" name="biography" id="biography" />
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
