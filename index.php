<?php
require __DIR__ . '/core/autoload.php';
require __DIR__ . '/Include/head.php';
require __DIR__ . '/Include/header.php';
?>

<section class="home" id="home-section">
  <?php
  require __DIR__ . '/Include/Parent/Add.php';
  require __DIR__ . '/Include/Parent/Special.php';
  require __DIR__ . '/Include/Parent/TopRestaurant.php';
  require __DIR__ . '/Include/Parent/Restaurant.php';
  require __DIR__ . '/Include/Parent/About.php';
  ?>

</section>

<?php require __DIR__ . '/Include/footer.php'; ?>

</html>