<?php
/*
  ./app/vues/posts/addForm.php
  Variable disponible:
    - $authors: ARRAY(ARRAY(id, firstname, lastname, biography, avatar, created_at,))
    - $categories: ARRAY(ARRAY(id, name, created_at))
*/
?>
<div class="page-header">
  <h1>Ajout d'un post</h1>
</div>

<form>
  <div class="form-group">
    <?php foreach ($categories as $categorie): ?>
      <label for="<?php echo $categorie['name']; ?>"><?php echo $categorie['name'] ?></label>
      <input type="checkbox" id="<?php echo $categorie['name']; ?>" name="<?php echo $categorie['name']; ?>">
    <?php endforeach; ?>
  </div>

  <!-- Menu déroulant dynamique -->
  <div class="form-group">
    <label for="author">Authors</label>
    <select name="author" class="form-control" id="author">
      <?php foreach ($authors as $author): ?>
        <option><?php echo $author['firstname']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
