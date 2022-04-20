<?php

include "header2.php";


if(isset($_POST['search'])){
    require "php/includes/dbh.inc.php";
    $search=mysqli_real_escape_string($connect,$_POST['inputSearch']);
    $sql = "SELECT * FROM product WHERE  productName like '%$search%';";
    //QUERY
		$query = mysqli_query($connect, $sql);
		//Return all result in an array
        $total=mysqli_num_rows($query);
        ?>
      <div class="container-fluid" style="margin-top: 143px;">
    <div class="row mt-5">
        <div class="col mt-4">
        <h3 class="text-center mt-5"> <span class="text-danger"><?= $total;?> &nbsp;</span>search results found</h3>
        </div>
    </div>
</div>
<!-- IGNORE -->
<div class="container mt-5">
  <div class="row mt-5">
    <div class="col mt-5">
    <h3 class="text-center text-danger mt-5">PLEASE IGNORE THIS PAGE UNDER CONSTRUCTION</h3>
    </div>
  </div>
</div>
        <?php
        if($total > 0){
            while ($row = mysqli_fetch_assoc($query)) {
                //Now loop through data
          $pro_id    = $row['productId'];
          $pro_name   = $row['productName'];
          $pro_price = $row['productPrice'];
          $pro_image = $row['productImage'];
          $pro_desc = $row['productDesc'];
          $discount=$row['discount'];
          $date=$row['productDate'];
          ?>
          <div class="container-fluid mt-5 block "  data-rotate-x="90deg" data-move-z="500px" style="margin-left:55px;">
    <div class="row mt-5">
        <div class="col-xl-3 col-lg-3 col-md-4 col-6 my-5 mainn mainn-raised">          
								<div class='product'>
									<a href='products.php?pid=<?= $pro_id ;?>'><div class='product-img'>
										<img src='images/uploads/<?=$pro_image?> ' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'><?=number_format($discount,2);?>%</span>
											<span class='new'>off</span>
										</div>
									</div></a>

									<div class='product-body'>
										<p class='product-category'><?=  $pro_name;?></p>
										<h4 class='product-price header-cart-item-info'>₵&nbsp;<?=number_format($pro_price,2);?><del class='product-old-price'><?=number_format($discount,2);?></del></h4>
                    <div class='product-btns'>
									
                  <button 
                  class='quick-view img-items' 
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  id=" <?=$row['productId']?>"><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span>
                   </button>
                </div> 
				<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<div class='add-to-cart'>
                  <?php if(!isset( $_SESSION['uid'])){ ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now <i class="fas fa-shopping-cart"></i>&nbsp;</a></p>
                                        <?php
                                        }
                                      
                                                else{
                                                  ?>
                                                  <a href="cart_add.php?id=<?=$row['productId']?>" class="btn btn-block btn-primary" name="add" value="add" >Add to cart &nbsp; <i class="fas fa-shopping-cart"></i></a> 
                                                  <?php

                                                }

                                        
                                        
                                        ?>
									</div>
								</div>
                </div> 
   
       
    </div>
</div>
          <?php
            } 
         
        }
        else{
            ?>
            <div class="container-fluid mt-5">
    <div class="row mt-5">
        <div class="col mt-4">
        <h3 class="text-center">NO AVAILABLE PRODUCT MATCHING YOUR SEARCH!</h3>
        </div>
    </div>
</div>
<?php
        }
    }
?>


	 		<!-- HOT DEAL SECTION -->
       <div id="hot-deal" class="section mainn mainn-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
					
							<h2 class="text-uppercase text-center">hot deal @ dufekuo stores</h2>
			
						
						</div>
					</div>
				</div>
				<!-- /row modal-->
				

			</div>
			<!-- /container -->
		</div>
   
 
<!-- customers review -->
<div class="container" data-aos="fade-down-left">
<h4 class="text-center ">SOME CUSTOMERS REVIEWS <SPan><i class="fas fa-grin-stars" style="color:gray;"></i></SPan></h4>
	<div class="row testimonial">

    <div class="col-sm-8 col-sm-offset-2">

    <img src="images/img1.jpg (2).jpg" class="img-responsive rounded-circle ml-5" style="width:20%;"> <span><i class="fab fa-facebook"></i></span>
    <small class="mt-2">Augustine Boadi-    <span class="text-muted">Programer</span> </small><br>
    <div>
      <i class="fas fa-star"></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
    </div>
<p>Duafekuo products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!.</p>
<i class="fas fa-thumbs-up" style="color:gray;"></i>
<i class="fas fa-laugh" style="color:gray;"></i>
<span class="text-muted">@ Kumasi</span>
</div>
<div class="col-sm-8 col-sm-offset-2">

    <img src="images/tom.jpg.jpg" class="img-responsive rounded-circle ml-5" style="width:15%;"><span> <i class="fab fa-twitter"></i></span>
    <small class="mt-2">Thomas Nyarkor-    <span class="text-muted">Business Man</span> </small><br>
    <div>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
    </div>
<p>Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!</p>
<i class="fas fa-thumbs-up" style="color:orange;"></i>
<i class="fas fa-laugh" style="color:orange"></i>
<span class="text-muted">@ Mankesim</span>
</div>
<div class="col-sm-8 col-sm-offset-2">

    <img src="images/stevo.jpg.jpg" class="img-responsive rounded-circle ml-5" style="width:20%;"><span> <i class="fab fa-twitter"></i></span>
    <small class="mt-2">Stephene Bowtway-    <span class="text-muted">DataBase Adminstrator</span> </small><br>
    <div>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
    </div>
<p>Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!.</p>
<i class="fas fa-thumbs-up" style="color:gray;"></i>
<i class="fas fa-hand-spock" style="color:gray;"></i>
<span class="text-muted">@ Takoradi</span>
</div>
<div class="col-sm-8 col-sm-offset-2">

    <img src="images/me.jpeg.jpg" class="img-responsive rounded-circle ml-5" style="width:20%;"><span> <i class="fab fa-instagram"></i></span>
    <small class="mt-2">Osacr Boadi-    <span class="text-muted">Student @ uew</span> </small><br>
    <div>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
    </div>
<p>Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!</p>
<i class="fas fa-thumbs-up" style="color:yellow;"></i>
<i class="fas fa-grin-alt" style="color:yellow;"></i>
<span class="text-muted">@ Takoradi</span>
</div>
<div class="col-sm-8 col-sm-offset-2">

    <img src="images/man2.jpeg.webp" class="img-responsive rounded-circle ml-5" style="width:30%;"><span> <i class="fab fa-twitter"></i></span>
    <small class="mt-2">Narbi Richard-    <span class="text-muted">enterprenuear</span> </small><br>
    <div>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star" style="color: yellow;"></i>
    </div>
<p>Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!</p>
<i class="fas fa-thumbs-up" style="color:gray;"></i>
<i class="fas fa-laugh" style="color:gray;"></i>
<span class="text-muted">@ kumasi</span>
</div>
<div class="col-sm-8 col-sm-offset-2">

    <img src="images/woman4.jpeg.jpeg" class="img-responsive rounded-circle ml-5" style="width:30%;"><span> <i class="fab fa-facebook"></i></span>
    <small class="mt-2">Mary Amoaben Princess-    <span class="text-muted">Student @ Uew</span> </small><br>
    <div>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star" ></i>
    </div>
<p>Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!
</p>
<i class="fas fa-thumbs-up" style="color:gray;"></i>
<i class="fas fa-laugh" style="color:gray;"></i>
<span class="text-muted">@ kumasi</span>
</div>


	</div>
</div>

<!-- related -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">product details</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
		<!-- container -->
        <div class="container-fluid" data-aos="flip-down">
				<!-- row -->
			
				<div class="row slid">

					<!-- section title -->
				
					<!-- /section title -->

					<!-- Products tab & slick -->

						
								<!-- tab -->
							
								
									
									<?php
                    include 'php/includes/dbh.inc.php';
								
                    
					$product_query = "SELECT * FROM product order by productId desc limit 18";
                $run_query = mysqli_query($connect,$product_query);
                $results=mysqli_num_rows($run_query);

                    while($row = mysqli_fetch_assoc($run_query)){
                        $pro_id    = $row['productId'];
                        $pro_name   = $row['productName'];
                        $pro_price = $row['productPrice'];
                        $pro_image = $row['productImage'];
                        $pro_desc = $row['productDesc'];
                        $discount=$row['discount'];
						?>
                  
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6  my-5 mainn mainn-raised">     
                                
								<div class='product'>
									<a href='products.php?pid=<?= $pro_id  ?>'><div class='product-img'>
										<img src='images/uploads/<?=$pro_image?> ' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'><?=number_format($discount,2);?>%</span>
											<span class='new'>off</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'><?=  $pro_name;?></p>
										<h4 class='product-price header-cart-item-info'>₵&nbsp;<?=number_format($pro_price,2);?><del class='product-old-price'>₵<?=number_format($discount,2);?></del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button 
                      class='quick-view img-items' 
                      data-mdb-toggle="modal"
                      data-mdb-target="#exampleModal"
                      id=" <?=$row['productId']?>"><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span>
                       </button>
										</div>
									</div>
									<div class='add-to-cart'>

                        <?php if(!isset( $_SESSION['uid'])){ ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now <i class="fas fa-shopping-cart"></i>&nbsp;</a></p>
                                        <?php
                                        }
                                      
                                                else{
                                                  ?>
                                                  <a href="cart_add.php?id=<?=$row['productId']?>" class="btn btn-block btn-primary" name="add" value="add" >Add to cart &nbsp; <i class="fas fa-shopping-cart"></i></a> 
                                                  <?php

                                                }

                                        
                                        
                                        ?>
										
									</div>
								</div>
                </div>             
							
                        
			<?php
		}
        ;
      

?>
								
								
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
     
			<!-- container -->
			<div class="container">
	
  <!-- row -->
  <div class="row owl-carousel owl-theme">
    <div class="col col-xl-3 col-lg-3 col-md-4 col-6" data-aos="zoom-out-down">
      <div class="section-title">
      
        <div class="section-nav">
          <div id="slick-nav-3" class="products-slick-nav"></div>
        </div>
      </div>
      

      <div class="products-widget-slick" data-nav="#slick-nav-3">
        <div id="get_product_home">
          <!-- product widget -->


          <!-- product widget -->
        </div>
        <?php
//Looping all products in database
//SQL
$sql = "SELECT * FROM product WHERE cartegory like '%Cutlery%' ORDER BY productId DESC limit 5; ";
//QUERY
$query = mysqli_query($connect, $sql);
//Return all result in an array
while ($row = mysqli_fetch_assoc($query)) {
//Now loop through data
$pro_id    = $row['productId'];
$pro_name   = $row['productName'];
$pro_price = $row['productPrice'];
$pro_image = $row['productImage'];
$pro_desc = $row['productDesc'];
$discount=$row['discount'];
?>

        <div id="get_product_home2">
          <!-- product widget -->
          <div class="product-widget">
            <div class="product-img">
              <img src="images/uploads/<?=$pro_image?>" alt="">
            </div>
            <div class="product-body">
              <p class="product-category">Top Cutlery</p>
              <h3 class="product-name"><a href='products.php?pid=<?= $pro_id ;?>'><?=$pro_name;?></a></h3>
              <h4 class="product-price">₵&nbsp;<?= $pro_price; ?><del class="product-old-price"><?=$discount;?></del></h4>
            </div>
          </div>
          <!-- /product widget -->

      
          <!-- /product widget -->
          <!-- product widget -->
        </div>
        <?php
}
?>
      </div>
    </div>

    <div class="col col-xl-3 col-lg-3 col-md-4 col-6" data-aos="fade-left">
      <div class="section-title">
        
        <div class="section-nav">
          <div id="slick-nav-4" class="products-slick-nav"></div>
        </div>
      </div>

      <div class="products-widget-slick" data-nav="#slick-nav-4">
        <div>
        <?php
//Looping all products in database
//SQL
$sql = "SELECT * FROM product WHERE cartegory like '%Appliances%' ORDER BY productId DESC limit 5 ";
//QUERY
$query = mysqli_query($connect, $sql);
//Return all result in an array
while ($row = mysqli_fetch_assoc($query)) {
//Now loop through data
$pro_id    = $row['productId'];
$pro_name   = $row['productName'];
$pro_price = $row['productPrice'];
$pro_image = $row['productImage'];
$pro_desc = $row['productDesc'];
$discount=$row['discount'];
?>
          <!-- product widget -->
          <div class="product-widget">
            <div class="product-img">
            <img src="images/uploads/<?=$pro_image?>" alt="">
            </div>
            <div class="product-body">
              <p class="product-category">Top Appliances</p>
              <h3 class="product-name"><a href='products.php?pid=<?= $pro_id ;?>'><?=$pro_name;?></a></h3>
              <h4 class="product-price">₵&nbsp;<?= $pro_price; ?><del class="product-old-price"><?=$discount;?></del></h4>
            </div>
          </div>
          <?php
}
?>
        
          <!-- product widget -->
        </div>

        <div>

          <!-- product widget -->
        </div>
      </div>
    </div>

    

    <div class="col col-xl-3 col-lg-3 col-md-4 col-6" data-aos="fade-right">
      <div class="section-title">
        
        <div class="section-nav">
          <div id="slick-nav-5" class="products-slick-nav"></div>
        </div>
      </div>

      <div class="products-widget-slick" data-nav="#slick-nav-5">
        <div>
        <?php
//Looping all products in database
//SQL
$sql = "SELECT * FROM product WHERE cartegory like '%Utensils%' ORDER BY productId DESC limit 5;";
//QUERY
$query = mysqli_query($connect, $sql);
//Return all result in an array
while ($row = mysqli_fetch_assoc($query)) {
//Now loop through data
$pro_id    = $row['productId'];
$pro_name   = $row['productName'];
$pro_price = $row['productPrice'];
$pro_image = $row['productImage'];
$pro_desc = $row['productDesc'];
$discount=$row['discount'];
?>


          <!-- product widget -->
          <div class="product-widget">
            <div class="product-img">
            <img src="images/uploads/<?=$pro_image?>" alt="">
            </div>
            <div class="product-body">
              <p class="product-category">Top Utensils</p>
              <h3 class="product-name"><a href='products.php?pid=<?= $pro_id ;?>'><?=$pro_name;?></a></h3>
              <h4 class="product-price">₵&nbsp;<?= $pro_price; ?> <del class="product-old-price"><?=$discount;?></del></h4>
            </div>
          </div>
          <?php
}
?>
          <!-- /product widget -->


          <!-- product widget -->
        </div>

      
      </div>
    </div>

    <div class="col col-xl-3 col-lg-3 col-md-4 col-6">
      <div class="section-title">
        
        <div class="section-nav">
          <div id="slick-nav-5" class="products-slick-nav"></div>
        </div>
      </div>

      <div class="products-widget-slick" data-nav="#slick-nav-5">
        <div>
        <?php
//Looping all products in database
//SQL
$sql = "SELECT * FROM product WHERE cartegory like '%Decor/Crafts%' ORDER BY productId DESC limit 5;";
//QUERY
$query = mysqli_query($connect, $sql);
//Return all result in an array
while ($row = mysqli_fetch_assoc($query)) {
//Now loop through data
$pro_id    = $row['productId'];
$pro_name   = $row['productName'];
$pro_price = $row['productPrice'];
$pro_image = $row['productImage'];
$pro_desc = $row['productDesc'];
$discount=$row['discount'];
?>


          <!-- product widget -->
          <div class="product-widget">
            <div class="product-img">
            <img src="images/uploads/<?=$pro_image?>" alt="">
            </div>
            <div class="product-body">
              <p class="product-category">Decor/Crafts</p>
              <h3 class="product-name"><a href='products.php?pid=<?= $pro_id ;?>'><?=$pro_name;?></a></h3>
              <h4 class="product-price">₵&nbsp;<?= $pro_price; ?> <del class="product-old-price"><?=$discount;?></del></h4>
            </div>
          </div>
          <?php
}
?>
          <!-- /product widget -->


          <!-- product widget -->
        </div>

      
      </div>
    </div>

    
    <div class="col col-xl-3 col-lg-3 col-md-4 col-6" data-aos="flip-left">
      <div class="section-title">
        
        <div class="section-nav">
          <div id="slick-nav-5" class="products-slick-nav"></div>
        </div>
      </div>

      <div class="products-widget-slick" data-nav="#slick-nav-5">
        <div>
        <?php
//Looping all products in database
//SQL
$sql = "SELECT * FROM product WHERE cartegory like '%Packages/Disposables%' ORDER BY productId DESC limit 5;";
//QUERY
$query = mysqli_query($connect, $sql);
//Return all result in an array
while ($row = mysqli_fetch_assoc($query)) {
//Now loop through data
$pro_id    = $row['productId'];
$pro_name   = $row['productName'];
$pro_price = $row['productPrice'];
$pro_image = $row['productImage'];
$pro_desc = $row['productDesc'];
$discount=$row['discount'];
?>


          <!-- product widget -->
          <div class="product-widget">
            <div class="product-img">
            <img src="images/uploads/<?=$pro_image?>" alt="">
            </div>
            <div class="product-body">
              <p class="product-category">Packages/Disposables</p>
              <h3 class="product-name"><a href='products.php?pid=<?= $pro_id ;?>'><?=$pro_name;?></a></h3>
              <h4 class="product-price">₵&nbsp;<?= $pro_price; ?> <del class="product-old-price"><?=$discount;?></del></h4>
            </div>
          </div>
          <?php
}
?>
          <!-- /product widget -->


          <!-- product widget -->
        </div>

      
      </div>
    </div>

  </div>

  <!-- /row -->
</div>
  
	



      <br><br><br><br>
			
     <!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background:#03644F;">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
   
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            <i class="fas fa-gem me-3" ></i>Duafekuo store
          </h6>
          <p>
          Get all kinds of quality products @ affodable price
		   
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Support Us!
          </h6>
          <p>
            <a href="#!" class="text-reset">Investors</a>
          </p>
          <p>
            <a href="#!" class="text-reset">donation</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Goals</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vision</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Cutlery</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Appliances</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Utensils</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Decor/Crafts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Packages/Disposables</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Kumasi ,Ghana</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
			duafekuoventures@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 233 24 582 8985</p>
          <p><i class="fas fa-print me-3"></i>+ 233 24 582 8985</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">Duafekuo.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 <!-- MDB -->
 <script
   type="text/javascript"
   src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
 ></script>
 <!-- jquery slick carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- testimonial spl_autoload_register -->
<script>
	$('.testimonial').slick({
  dots:true,
  infinite:true,
  speed: 300,
  slidesToShow:3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
 
//   prevArrow:"<span class='prev-arrow'><i class='fas fa-angle-left'></i></span>",
//   nextArrow:"<span class='next-arrow'><i class='fas fa-angle-right'></i></span>",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
	
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
 
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    dots:false,
    nav:true,
    itemsDeskto : [1199,3],
      itemsDesktopSmall : [979,3],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:3
           
        }
    }
})

});


 
</script>

<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script>
   $('.counter').counterUp({
    delay: 10,
    time: 1000
});

   </script>
<script>
  $(document).ready(function(){
$(".img-items").click(function(){

var id=$(this).attr('id');
$.ajax({
url:"cart_add.php",
method:"POST",
data:{id:id},
success:function(data){
$(".modal-body").html(data);
}

})


})

  });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  $(document).ready(function(){
    AOS.init();
  })  
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61059f01d6e7610a49adf098/1fbuva8vm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script--> 

<!-- bootsrap s5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
