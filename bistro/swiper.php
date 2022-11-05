
<style>
    .animate__animated.animate__slideInRight
    {
        --animate-duration: 1s;
    }
</style>
  <section>
    <div class="mt-5 container animate__animated wow animate__slideInRight">
      <!-- Swiper -->
      <div class="swiper-container swiper-container2 s-coverflow">
        <div class="swiper-wrapper">
            <div class="row">
  <?php
      $query  = "SELECT * FROM restaurant ORDER BY date DESC";
      $stmt   = $conn->prepare($query);
      $stmt   ->execute();
      $result = $stmt->get_result();

      while($row = $result->fetch_assoc())
      {

    ?>
        
          <div class="col-xs-12 col-sm-12">
            <div class="swiper-slide swiper-slide2">
                <div class="">
                <a href="dishes.php?res_id=<?= $row['rs_id']; ?>"><img src="../admin/Res_img/<?= $row['image']; ?>"  class="rounded shadow-lg card-img-top" width="100" height="200" alt=""></a>
                <div class="card-body p-1">
                    <h5 class="card-title text-center"><?= $row['title']; ?></h5>
                </div>
                </div>
            </div>
          </div>

          
<!-- 
          <div class="swiper-slide swiper-slide2" style="background-image:url(./images/nature-2.jpg)">
          </div> -->
          
        
    <?php
     
      }
      $stmt->close();
    ?>
    </div>
          </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>


