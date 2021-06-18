 <!-- new-arrival New Arrivals-->
      <section id="new-arrival">
        <div class="container py-2 ">
          <h4 class="font-rubik font-size-20">New Arrivals</h4>
          <hr>
          <!--Owl Carousel-->
          <div class="owl-carousel owl-theme py-10">

          <?php 
            $curr_date = date("Y-m-d");
            $query = "Select * from cotisen where co_date+10 >= $curr_date";
            $select_all_dentalperfect = mysqli_query($connection, $query);
            if(! $select_all_dentalperfect){
              echo "err";
            }
            while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
               $co_id = $row['co_id'];
               $co_title = $row['co_name'];
               $co_price = $row['co_price'];
               $co_img = $row['co_img'];
          ?>
            <!--Product item 1-->
            <div class="item py-1 px-2 bg-light"> 
              <div class="product font-rale">
                <a href="product.php?co_id=<?php echo $co_id; ?>">
                  <img src="<?php echo $co_img; ?>" alt="item1" class="img-fluid py-3">
                </a>
                <div class="text-center py-1">
                  <!--Product title-->
                  <a href="product.php?co_id=<?php echo $co_id; ?>">
                  <h6> <?php echo $co_title; ?> </h6>
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
                    <span> Rs. <?php echo $co_price ?></span>
                  </div>
                  <!--Product Button (add to cart)-->
                  <!-- <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button> -->
                  </a>
                </div>
              </div>
            </div>

            <?php } ?>
            
          </div>
          <!--/Owl Carousel-->
          <hr style="margin-top: 25px;">
        </div>
      </section>
    <!-- /new-arrival New Arrivals-->
