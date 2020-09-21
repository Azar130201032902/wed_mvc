<?php
/*
  ./app/vues/tags/index.php
  Variable disponible:
    $tags = ARRAY(ARRAY(id, name, created_at))
 */
?>
<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">
      <?php foreach ($tags as $tag): ?>
        <li>
            <a href="#"><?php echo $tag['name']; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
</aside>
