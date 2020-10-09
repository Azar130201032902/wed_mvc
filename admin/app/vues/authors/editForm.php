<?php
/*
  ./app/vues/authors/editForm.php
  Variable disponible:
    $author: ARRAY(id, firstname, lastname, biography, avatar, created_at)
 */
?>
<h1>Modifiation d'un author</h1>
<div>
  <a href="authors">Retour à la liste des authors</a>
</div>
<form action="authors/edit/<?php echo $autor['id']; ?>" method="post" class="edit">
  <div>
    <label for="firstname">Prénom de l'author</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $autor['firstname']; ?>"/>
  </div>
  <div>
    <label for="lastname">Nom de l'author</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $autor['lastname']; ?>"/>
  </div>
  <div>
    <label for="biography">Biographie de l'author</label>
    <input type="text" name="biography" id="biography" value="<?php echo $autor['biography']; ?>"/>
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
