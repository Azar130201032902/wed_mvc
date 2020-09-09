<?php
/*
  ./app/vues/template/defaut.php
  TEMPLATE DE L'APPLICATION
 */
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <?php include_once '../app/vues/template/partials/head.php'; ?>
</head>
<body>
<!-- Preloader Start -->
<?php include_once '../app/vues/template/partials/preloader.php'; ?>
<!-- Preloader Start-->

<?php include_once '../app/vues/template/partials/header.php'; ?>

<main>
    <!--================Blog Area =================-->
    <?php include_once '../app/vues/template/partials/section.php'; ?>
    <!--================Blog Area =================-->
</main>

<?php include_once '../app/vues/template/partials/footer.php'; ?>

<!-- JS here -->
<?php include_once '../app/vues/template/partials/scripts.php'; ?>


</body>
</html>
