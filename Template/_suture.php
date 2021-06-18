   <!-- suture suture-->
    <section id="suture">
      <div class="container py-2">
        <h4 class="font-rubik font-size-20">Sutures</h4>
        <hr>
        <!--Owl Carousel-->
        <div class="owl-carousel owl-theme py-10">

            <?php 
            $query = "Select * from suture";
            $select_all_dentalperfect = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
               $su_id = $row['su_id'];
               $su_title = $row['su_name'];
               $su_price = $row['su_price'];
               $su_img = $row['su_img'];
            ?>


          <!--Product item 1-->
          <div class="item py-1 px-2 bg-light">
            <div class="product font-rale">
              <a href="product.php?su_id=<?php echo $su_id; ?>">
                <img src="<?php echo $su_img; ?>" alt="item1" class="img-fluid py-3">
              </a>
              <div class="text-center py-1">
                <!--Product title-->
                <h6><?php echo $su_title; ?></h6>
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
                  <span>Rs. <?php echo $su_price; ?></span>
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
    <!-- /suture suture-->