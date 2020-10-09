<?php
/*
  ./app/vues/posts/editForm.php
  Variable disponible:
    $post: ARRAY(id, title, content ,created_at)
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
  <div>
    <input type="submit" />
  </div>
</form>
