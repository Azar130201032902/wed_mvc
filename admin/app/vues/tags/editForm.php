<?php
/*
  ./app/vues/tags/editForm.php
  Variable disponible:
    $tag: ARRAY(id, name, created_at)
 */
?>
<h1>Modifiation d'un tag</h1>
<div>
  <a href="tags">Retour à la liste des tags</a>
</div>
<form action="tags/edit/<?php echo $tag['id']; ?>" method="post" class="edit">
  <div>
    <label for="name">Nom du tag</label>
    <input type="text" name="name" id="name" value="<?php echo $tag['name']; ?>"/>
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
