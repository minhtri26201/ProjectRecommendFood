<!--Specials-->
<div class="spl">
  <h2>Our Specials</h2>
</div>
<div class="table">
  <?php $q = mysqli_query($mysql, "SELECT * FROM Product");
  while ($row = mysqli_fetch_assoc($q)) { ?>
    <a href="dishes.html">
      <img src="<?= $row['Image'] ?>" height="150">
      <h4>$<?= ($row['Name']) ?></h4>
    </a>
  <?php } ?>
</div>
