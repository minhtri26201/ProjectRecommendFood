
<!--Restaurants-->
<div class="res">
  <h2>14 Restaurants</h2>
  <hr class="line">
</div>
<section class="barb" id="biryani">
  <h1 class="barbeque">Restaurants</h1>
  <hr class="line">
  <div class="box-container">

  <?php $q = mysqli_query($mysql, "SELECT * FROM Restaurant");
  while ($row = mysqli_fetch_assoc($q)) { ?>
    <div class="box">
      <a href="barbeque.html">
      <img src="<?= $row['RestaurantImage'] ?>" height="150"> </a>
      <h3><?=$row['RestaurantID']?></h3>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <br>
        <p>Food</p>

      </div>
    </div>
    <?php } ?>
  


  </div>



</section>
