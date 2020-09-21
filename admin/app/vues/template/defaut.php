<?php
/*
  ./app/vues/template/defaut.php
  TEMPLATE DE L'APPLICATION
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once '../app/vues/template/partials/head.php' ?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include_once '../app/vues/template/partials/nav.php' ?>

    <div class="container theme-showcase" role="main">

      <?php echo $content; ?>

    </div> <!-- /container -->


    <?php include_once '../app/vues/template/partials/scripts.php'; ?>
  </body>
</html>
