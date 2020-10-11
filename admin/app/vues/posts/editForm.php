<?php
/*
  ./app/vues/posts/editForm.php
  Variable disponible:
    $post: ARRAY(id, title, content ,created_at)
    $postTags: ARRAY(id)
    $authors: ARRAY(ARRAY(id, firstName, lastname, biography, avatar, created_at))
    $categories: ARRAY(ARRAY(id, name, created_at))
 */
?>
<h1>Modifiation d'un post</h1>
<div>
  <a href="posts">Retour à la liste des posts</a>
</div>
<form action="posts/edit/<?php echo $post['id']; ?>" method="post" class="edit">
  <div>
    <label for="title">Titre du post</label>
    <input type="text" name="title" id="title" value="<?php echo $post['title']; ?>"/>
  </div>
  <div>
    <label for="content">Content</label>
    <textarea name="content" ><?php echo $post['content']; ?></textarea>
  </div>

  <!-- Checkbox des tags -->
  <div class="form-group">
    <?php foreach ($tags as $tag): ?>
      <label for="<?php echo $tag['name']; ?>"><?php echo $tag['name'] ?></label>
      <input type="checkbox" id="<?php echo $tag['name']; ?>" name="tags[]" value="<?php echo $tag['id']; ?>" <?php if(in_array($tag['id'], $postTags)){ echo 'checked="checked"'; } ?>>
    <?php endforeach; ?>
  </div>

  <!-- Menu déroulant dynamique des catégories -->
  <div class="form-group">
    <label for="categorie">Categories</label>
    <select name="categorie" class="form-control" id="categorie">
      <?php foreach ($categories as $categorie): ?>
        <option value="<?php echo $categorie['id']; ?>" <?php if($categorie['id'] == $post['categorie_id']){ echo 'selected="selected"'; } ?>>
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
        <option value="<?php echo $author['id']; ?>" <?php if($author['id'] == $post['author_id']){ echo 'selected="selected"'; } ?>>
          <?php echo $author['firstname']; ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>

  <div>
    <input type="submit" />
  </div>
</form>
