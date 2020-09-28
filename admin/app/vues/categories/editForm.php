<?php
/*
  ./app/vues/categories/editForm.php
  Variable disponible:
    $categorie: ARRAY(id, name, created_at)
 */
?>
<h1>Modifiation d'une catégories</h1>
<div>
  <a href="categories">Retour à la liste des catégories</a>
</div>
<form action="categories/edit/<?php echo $categorie['id']; ?>" method="post" class="edit">
  <div>
    <label for="name">Nom de la catégorie</label>
    <input type="text" name="name" id="name" value="<?php echo $categorie['name']; ?>"/>
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
