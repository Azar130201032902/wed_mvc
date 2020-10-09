<?php
/*
  ./app/vues/authors/index.php
  Variable disponible:
    $authors = ARRAY(ARRAY(id, firstname, lastname, biography, avatar, created_at))
 */
?>
<div class="page-header">
  <h1><?php echo TITRE_AUTHORS_INDEX; ?></h1>
</div>
<div class="row">
  <div class="col-md-6">
    <a href="authors/add/form">Ajouter un author</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Biography</th>
          <th>Avatar</th>
          <th>Created At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($authors as $author): ?>
          <tr>
            <td><?php echo $author['id']; ?></td>
            <td><?php echo $author['firstname']; ?></td>
            <td><?php echo $author['lastname']; ?></td>
            <td><?php echo $author['biography']; ?></td>
            <td><?php echo $author['avatar']; ?></td>
            <td><?php echo $author['created_at']; ?></td>
            <td>
              <a href="authors/edit/form/<?php echo $author['id']; ?>">Edit</a>
            </td>
            <td>
              <a href="authors/delete/<?php echo $author['id']; ?>" class="delete">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
