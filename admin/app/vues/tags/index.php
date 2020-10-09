<?php
/*
  ./app/vues/tags/index.php
  Variable disponible:
    $tags = ARRAY(ARRAY(id, name, created_at))
 */
?>
<div class="page-header">
  <h1><?php echo TITRE_TAGS_INDEX; ?></h1>
</div>
<div class="row">
  <div class="col-md-6">
    <a href="tags/add/form">Ajouter un tag</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Created At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($tags as $tag): ?>
          <tr>
            <td><?php echo $tag['id']; ?></td>
            <td><?php echo $tag['name']; ?></td>
            <td><?php echo $tag['created_at']; ?></td>
            <td>
              <a href="tags/edit/form/<?php echo $tag['id']; ?>">Edit</a>
            </td>
            <td>
              <a href="tags/delete/<?php echo $tag['id']; ?>" class="delete">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
