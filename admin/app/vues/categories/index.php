<?php
/*
  ./app/vues/categories/index.php
  Variable disponible:
    $categories = ARRAY(ARRAY(id, name, created_at))
 */
?>
<div class="page-header">
  <h1><?php echo TITRE_CATEGORIES_INDEX; ?></h1>
</div>
<div class="row">
  <div class="col-md-6">
    <a href="categories/add/form">Ajouter une catégories</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Created At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $categorie): ?>
          <tr>
            <td><?php echo $categorie['id']; ?></td>
            <td><?php echo $categorie['name']; ?></td>
            <td><?php echo $categorie['created_at']; ?></td>
            <td>
              <a href="categories/edit/form/<?php echo $categorie['id']; ?>">Edit</a>
            </td>
            <td>
              <a href="categories/delete/<?php echo $categorie['id']; ?>" class="delete">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
