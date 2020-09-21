<?php
/*
  ./app/vues/posts/show.php
  Variable disponible:
    - ARRAY(id, title, content, created_at, image, author_id, categorie_id)
*/
?>
<div class="col-lg-8 posts-list">
   <div class="single-post">
      <div class="feature-img">
         <img class="img-fluid" src="assets/img/blog/<?php echo $post['postImage']; ?>" alt="<?php echo $post['postTitle']; ?>">
      </div>
      <div class="blog_details">
         <h2>
           <?php echo $post['postTitle'] ?>
         </h2>
         <ul class="blog-info-link mt-3 mb-4">
            <li><a href="#"><i class="fa fa-user"></i><?php echo $post['ctgName']; ?></a></li>
         </ul>
         <p class="excert">
            <?php echo $post['postContent']; ?>
         </p>
      </div>
   </div>

   <!-- DETAILS AUTHOR -->
   <?php include_once '../app/vues/authors/show.php'; ?>

</div>
