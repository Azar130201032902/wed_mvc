<?php
/*
  ./app/vues/posts/search.php
  Variable disponible:
    - $search STRING
    - $posts = ARRAY(ARRAY(id, title, content, created_at, image, author_id, categorie_id))
*/
?>

<div class="col-lg-8 mb-5 mb-lg-0">
  <div class="blog_left_sidebar">
    <h2>Résultat de la recherche:</h2>
    <p><?php echo $search; ?></p>
    <?php foreach ($posts as $post): ?>
      <article class="blog_item">
          <div class="blog_item_img">
              <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['postImage']; ?>" alt="<?php echo $post['postTitle']; ?>">
              <a href="#" class="blog_item_date">
                  <h3><?php echo date_format(date_create($post['postDate']), "j"); ?></h3>
                  <p><?php echo date_format(date_create($post['postDate']), "M"); ?></p>
              </a>
          </div>

          <div class="blog_details">
              <a class="d-inline-block" href="posts/<?php echo $post['postId']; ?>">
                  <h2><?php echo $post['postTitle']; ?></h2>
              </a>
              <p><?php echo $post['postContent']; ?></p>
              <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i><?php echo $post['ctgName']; ?></a></li>
              </ul>
          </div>
      </article>
    <?php endforeach; ?>

  </div>
</div>
