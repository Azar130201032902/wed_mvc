<?php
/*
  ./app/vues/posts/index.php
  Variable disponible:
    - ARRAY(ARRAY(id, title, content, created_at, image, author_id, categorie_id))
*/
?>
<div class="page-header">
  <h1><?php echo TITRE_POSTS_INDEX; ?></h1>
</div>
<div class="row">
  <div class="col-md-6">
    <a href="posts/add">Ajouter un post</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Content</th>
          <th>Created at</th>
          <th>Image</th>
          <th>Author ID</th>
          <th>Categorie</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($posts as $post): ?>
          <tr>
            <td><?php echo $post['postId']; ?></td>
            <td><?php echo $post['postTitle']; ?></td>
            <td><?php echo $post['postContent']; ?></td>
            <td><?php echo date_format(date_create($post['postDate']), "d-m-Y"); ?></td>
            <td><img src="assets/img/blog/<?php echo $post['postImage']; ?>" alt="<?php echo $post['postId']; ?>" width="50"></td>
            <td><?php echo $post['authorsName']; ?></td>
            <td><?php echo $post['ctgName']; ?></td>
            <td>
              <a href="#">Edit</a>
            </td>
            <td>
              <a href="#">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
