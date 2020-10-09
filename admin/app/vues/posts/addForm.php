<?php
/*
  ./app/vues/posts/addForm.php
  Variable disponible:
    - $authors: ARRAY(ARRAY(id, firstname, lastname, biography, avatar, created_at,))
    - $categories: ARRAY(ARRAY(id, name, created_at))
    - $tags: ARRAY(ARRAY(id, name, created_at))
*/
?>
<div class="page-header">
  <h1>Ajout d'un post</h1>
</div>

<form action="posts/add/insert" method="post">

  <div class="form-group">
    <div>
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" />
    </div>

    <label for="content">Content</label>
    <textarea name="content" class="form-control" rows="3"></textarea>
  </div>

  <!-- Checkbox des tags -->
  <div class="form-group">
    <?php foreach ($tags as $tag): ?>
      <label for="<?php echo $tag['name']; ?>"><?php echo $tag['name'] ?></label>
      <input type="checkbox" id="<?php echo $tag['name']; ?>" name="tags[]" value="<?php echo $tag['id']; ?>">
    <?php endforeach; ?>
  </div>

  <!-- Menu déroulant dynamique des catégories -->
  <div class="form-group">
    <label for="author">Categories</label>
    <select name="author" class="form-control" id="author">
      <?php foreach ($categories as $categorie): ?>
        <option value="<?php echo $categorie['id']; ?>">
          <?php echo $categorie['name']; ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>

  <!-- Menu déroulant dynamique des autheurs -->
  <div class="form-group">
    <label for="author">Authors</label>
    <select name="author" class="form-control" id="author">
      <?php foreach ($authors as $author): ?>
        <option value="<?php echo $author['id']; ?>">
          <?php echo $author['firstname']; ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>

  <!-- <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->

  <div>
    <input type="submit" />
  </div>

</form>
