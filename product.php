<?php
//include header
include('db.php');
include('header.php');
?>

<?php
  if(isset($_GET['dp_id'])){
    $the_id = $_GET['dp_id'];
    $query = "SELECT * FROM dentalperfect where dp_id = $the_id";
    $select_all_dentalperfect = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
      $dp_id = $row['dp_id'];
      $dp_title = $row['dp_name'];
      $dp_brand = $row['dp_brand'];
      $dp_price = $row['dp_price'];
      $dp_warranty = $row['dp_warranty'];
      $dp_upw = $row["dp_upw"];
      $dp_pd = $row["dp_pd"];
      $dp_img = $row['dp_img'];

?>

 <!-- product-->
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <!-- first column-->
          <div class="col-sm-6">
            <img src="<?php echo $dp_img; ?>" style="height: 500px;" alt="product" class="img-fluid">
            <div class="row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Proceed to buy</button> 
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning form-control">Add to cart</button>
              </div>

            </div>
          </div>
          <!-- second column-->
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20">
              <?php echo $dp_title; ?>
            </h5>
            <small>by <?php echo $dp_brand; ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20 ratings & reviews </a>

            </div>
            <hr class="m-0">

            <!--product price-->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>M.R.P</td>
                <td><strike>Nrs. 4,00,000</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Deal Price</td>
                <td class="font-size-20 text-danger">&nbsp; Nrs.<span><?php echo $dp_price; ?>
                </span><small class="text-dark font-size-12">&nbsp;Inc. VAT</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save</td>
                <td><span class="font-size-16 text-danger">Nrs 30,000</span</td>
              </tr>
            </table>
            <!--/product price-->

            <!--policy-->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">3<br> Delivery</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year<br> Warranty</a>
                </div>

              </div>
            </div>
            <!--/policy-->
            <hr>
            <!--#order-details order details-->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery by: Mar 29 - Apr 1</small>
              <small>Sold by <a href="#">Nepal Dental International</a>(4.5 out of 5 | 50 ratings )</small>
              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer-460019</small>
            </div>
            <!--/order details-->

            <!--quantities-->
            <div class="row">
              <div class="col-6">
                <!--color-->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-primary-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-second-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                  </div>
                </div>
                <!--/color-->
              </div>
              <div class="col-6">
                <!--quantity-->
                <div class="qty d-flex">
                  <h6 font-baloo>Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="product1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!--/quantities-->
              </div>
            </div>
            

            <!--other features-->
            <div class="size mt-3 mb-0">
              <h6 class="font-baloo">Size:</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 1</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 2</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 3</button>
                </div>
              </div>
            </div>
            <!--/other features-->
          </div>

          <!--Product description-->
          <div class="col-12 mt-1">
            <h6 class="font-rubik">Product Description</h6>
            <hr>

            <p class="font-rale font-size-14">
            <?php echo $dp_pd; ?>
            <hr class="mt-0">

          </div>
        </div>
      </div>
    </section>
    <!-- /product-->

<?php }} ?>

<!-- Suture product -->

<?php
  if (isset($_GET['su_id'])){
    $the_id = $_GET['su_id'];
    $query = "SELECT * FROM suture where su_id = $the_id";
    $select_all_dentalperfect = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
      $su_id = $row['su_id'];
      $su_title = $row['su_name'];
      $su_brand = $row['su_brand'];
      $su_price = $row['su_price'];
      $su_warranty = $row['su_warranty'];
      $su_upw = $row["su_upw"];
      $su_pd = $row["su_pd"];
      $su_img = $row['su_img'];

?>

 <!-- product-->
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <!-- first column-->
          <div class="col-sm-6">
            <img src="<?php echo $su_img; ?>" style="height: 500px;" alt="product" class="img-fluid">
            <div class="row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Proceed to buy</button> 
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning form-control">Add to cart</button>
              </div>

            </div>
          </div>
          <!-- second column-->
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20">
              <?php echo $su_title; ?>
            </h5>
            <small>by <?php echo $su_brand; ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20 ratings & reviews </a>

            </div>
            <hr class="m-0">

            <!--product price-->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>M.R.P</td>
                <td><strike>Nrs. 4,00,000</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Deal Price</td>
                <td class="font-size-20 text-danger">&nbsp; Nrs.<span><?php echo $su_price; ?>
                </span><small class="text-dark font-size-12">&nbsp;Inc. VAT</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save</td>
                <td><span class="font-size-16 text-danger">Nrs 30,000</span</td>
              </tr>
            </table>
            <!--/product price-->

            <!--policy-->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">3<br> Delivery</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year<br> Warranty</a>
                </div>

              </div>
            </div>
            <!--/policy-->
            <hr>
            <!--#order-details order details-->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery by: Mar 29 - Apr 1</small>
              <small>Sold by <a href="#">Nepal Dental International</a>(4.5 out of 5 | 50 ratings )</small>
              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer-460019</small>
            </div>
            <!--/order details-->

            <!--quantities-->
            <div class="row">
              <div class="col-6">
                <!--color-->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-primary-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-second-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                  </div>
                </div>
                <!--/color-->
              </div>
              <div class="col-6">
                <!--quantity-->
                <div class="qty d-flex">
                  <h6 font-baloo>Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="product1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!--/quantities-->
              </div>
            </div>
            

            <!--other features-->
            <div class="size mt-3 mb-0">
              <h6 class="font-baloo">Size:</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 1</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 2</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 3</button>
                </div>
              </div>
            </div>
            <!--/other features-->
          </div>

          <!--Product description-->
          <div class="col-12 mt-1">
            <h6 class="font-rubik">Product Description</h6>
            <hr>

            <p class="font-rale font-size-14">
            <?php echo $su_pd; ?>
            <hr class="mt-0">

          </div>
        </div>
      </div>
    </section>
    <!-- /product-->

<?php }} ?>

<!-- Cotisen product -->
<?php
  if (isset($_GET['co_id'])){
    $the_id = $_GET['co_id'];
    $query = "SELECT * FROM cotisen where co_id = $the_id";
    $select_all_dentalperfect = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
      $co_id = $row['co_id'];
      $co_title = $row['co_name'];
      $co_brand = $row['co_brand'];
      $co_price = $row['co_price'];
      $co_warranty = $row['co_warranty'];
      $co_upw = $row["co_upw"];
      $co_pd = $row["co_pd"];
      $co_img = $row['co_img'];

?>

 <!-- product-->
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <!-- first column-->
          <div class="col-sm-6">
            <img src="<?php echo $co_img; ?>" style="height: 500px;" alt="product" class="img-fluid">
            <div class="row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Proceed to buy</button> 
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning form-control">Add to cart</button>
              </div>

            </div>
          </div>
          <!-- second column-->
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20">
              <?php echo $co_title; ?>
            </h5>
            <small>by <?php echo $co_brand; ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20 ratings & reviews </a>

            </div>
            <hr class="m-0">

            <!--product price-->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>M.R.P</td>
                <td><strike>Nrs. 4,00,000</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Deal Price</td>
                <td class="font-size-20 text-danger">&nbsp; Nrs.<span><?php echo $co_price; ?>
                </span><small class="text-dark font-size-12">&nbsp;Inc. VAT</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save</td>
                <td><span class="font-size-16 text-danger">Nrs 30,000</span</td>
              </tr>
            </table>
            <!--/product price-->

            <!--policy-->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">3<br> Delivery</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year<br> Warranty</a>
                </div>

              </div>
            </div>
            <!--/policy-->
            <hr>
            <!--#order-details order details-->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery by: Mar 29 - Apr 1</small>
              <small>Sold by <a href="#">Nepal Dental International</a>(4.5 out of 5 | 50 ratings )</small>
              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer-460019</small>
            </div>
            <!--/order details-->

            <!--quantities-->
            <div class="row">
              <div class="col-6">
                <!--color-->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-primary-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-second-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                  </div>
                </div>
                <!--/color-->
              </div>
              <div class="col-6">
                <!--quantity-->
                <div class="qty d-flex">
                  <h6 font-baloo>Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="product1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!--/quantities-->
              </div>
            </div>
            

            <!--other features-->
            <div class="size mt-3 mb-0">
              <h6 class="font-baloo">Size:</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 1</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 2</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 3</button>
                </div>
              </div>
            </div>
            <!--/other features-->
          </div>

          <!--Product description-->
          <div class="col-12 mt-1">
            <h6 class="font-rubik">Product Description</h6>
            <hr>

            <p class="font-rale font-size-14">
            <?php echo $co_pd; ?>
            <hr class="mt-0">

          </div>
        </div>
      </div>
    </section>
    <!-- /product-->
 <?php }} ?>


<!-- dts product -->
<?php

  if (isset($_GET['dts_id'])){
    $the_id = $_GET['dts_id'];
    $query = "SELECT * FROM dts where dts_id = $the_id";
    $select_all_dentalperfect = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_all_dentalperfect)){
      $dts_id = $row['dts_id'];
      $dts_title = $row['dts_name'];
      $dts_brand = $row['dts_brand'];
      $dts_price = $row['dts_price'];
      $dts_warranty = $row['dts_warranty'];
      $dts_upw = $row["dts_upw"];
      $dts_pd = $row["dts_pd"];
      $dts_img = $row['dts_img'];

?>

 <!-- product-->
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <!-- first column-->
          <div class="col-sm-6">
            <img src="<?php echo $dts_img; ?>" style="height: 500px;" alt="product" class="img-fluid">
            <div class="row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Proceed to buy</button> 
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning form-control">Add to cart</button>
              </div>

            </div>
          </div>
          <!-- second column-->
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20">
              <?php echo $dts_title; ?>
            </h5>
            <small>by <?php echo $dts_brand; ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20 ratings & reviews </a>

            </div>
            <hr class="m-0">

            <!--product price-->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>M.R.P</td>
                <td><strike>Nrs. 4,00,000</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Deal Price</td>
                <td class="font-size-20 text-danger">&nbsp; Nrs.<span><?php echo $dts_price; ?>
                </span><small class="text-dark font-size-12">&nbsp;Inc. VAT</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save</td>
                <td><span class="font-size-16 text-danger">Nrs 30,000</span</td>
              </tr>
            </table>
            <!--/product price-->

            <!--policy-->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">3<br> Delivery</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year<br> Warranty</a>
                </div>

              </div>
            </div>
            <!--/policy-->
            <hr>
            <!--#order-details order details-->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery by: Mar 29 - Apr 1</small>
              <small>Sold by <a href="#">Nepal Dental International</a>(4.5 out of 5 | 50 ratings )</small>
              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer-460019</small>
            </div>
            <!--/order details-->

            <!--quantities-->
            <div class="row">
              <div class="col-6">
                <!--color-->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-primary-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-second-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                  </div>
                </div>
                <!--/color-->
              </div>
              <div class="col-6">
                <!--quantity-->
                <div class="qty d-flex">
                  <h6 font-baloo>Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="product1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!--/quantities-->
              </div>
            </div>
            

            <!--other features-->
            <div class="size mt-3 mb-0">
              <h6 class="font-baloo">Size:</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 1</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 2</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 3</button>
                </div>
              </div>
            </div>
            <!--/other features-->
          </div>

          <!--Product description-->
          <div class="col-12 mt-1">
            <h6 class="font-rubik">Product Description</h6>
            <hr>

            <p class="font-rale font-size-14">
            <?php echo $dts_pd; ?>
            <hr class="mt-0">

          </div>
        </div>
      </div>
    </section>
    <!-- /product-->
 <?php }} ?>


<?php


/**include new-arrival */
include('Template/_new-arrival.php');


?>

<?php 
  //include footer.php
  include('footer.php');
?>