  <!-- dts DTS-->
    <section id="dts">
      <div class="container py-2">
        <h4 class="font-rubik font-size-20">DTS</h4>
        <hr>
        <!--Owl Carousel-->
        <div class="owl-carousel owl-theme py-10">
          <?php 
            $query = "Select * from dts";
            $select_all_dentalperfect = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
               $dts_id = $row['dts_id'];
               $dts_title = $row['dts_name'];
               $dts_price = $row['dts_price'];
               $dts_img = $row['dts_img'];
            ?>

          <!--Product item 1-->
          <div class="item py-1 px-2 bg-light">
            <div class="product font-rale">
              <a href="product.php?dts_id=<?php echo $dts_id; ?>">
                <img src="<?php echo $dts_img;?>" alt="item1" class="img-fluid py-3">
              </a>
              <div class="text-center py-1">
                <!--Product title-->
                <h6> <?php echo $dts_title; ?> </h6>
                <!--Product rating-->
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <!--Product Price-->
                <div class="price py-3">
                  <span>Rs. <?php echo $dts_price; ?></span>
                </div>
                <!--Product Button (add to cart)-->
                <!-- <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button> -->
    
              </div>
            </div>
          </div>
              <?php } ?>
    
        </div>
        <!--/Owl Carousel-->
        <hr style="margin-top: 25px;">
      </div>
    </section>
    <!-- /dts DTS-->