<?php
include "header2.php";
include_once("php/includes/dbh.inc.php");


?>
<div class="container-fluid section mainn mainn-raised" id="hot-deal">
  <div class="row">
    <div class="col">
          		<!-- HOT DEAL SECTION -->
	
			<!-- container -->
			<div class="container " data-aos="zoom-in-up">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
						

							<h2 class="text-uppercase mt-5">hot deal @ duafekuo stores</h2>
							<p>New Collection Up to 50% OFF </p>
        
							<!-- collapase -->
							<!-- Button triggers collapse -->
<a
  class="btn btn-outline-danger cta-btn"
  data-mdb-toggle="collapse"
  href="#collapseWithScrollbar"
  role="button"
  aria-expanded="false"
  aria-controls="collapseExample"
>
READ MORE
</a>

<!-- Collapsed content -->
<div class="collapse mt-3 scroll-section" id="collapseWithScrollbar"  style="max-width: 500px">
10% discount on every product you purchase from now till december what are you waiting for rush now
</div>
							
							<!-- Button trigger modal -->
						
						</div>
					</div>
				</div>
				<!-- /row modal-->
				

			</div>
      
			<!-- /container -->
	
    </div>
    <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
      <img src="images/about.jpg.png" class="img-fluid animated">
    </div>
  </div>
</div>

		
			<?php
if(isset($_GET['error'])){
    if($_GET['error']=="itemExits"){
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center mt-5" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
 <p class="text-center mt-5">item aready added to your cart!</p> 
</div>
</div>



<?php
    }
}
elseif(isset($_GET['add'])){
    ?>
 <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>

</svg>
<div class="alert alert-success d-flex align-items-center mt-5" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
	  <p class="text-center mt-5">item added to your cart!</p>

  </div>
</div>
    <?php
}
?>
			<!-- container -->
			<div class="container-fluid " data-aos="fade-up">
				<!-- row -->
				<div class="col-md-12">
						<div class="section-title">
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">New Arrivals</a></li>
								
								</ul>
							</div>
						</div>
					</div>
				<div class="row slid">

					<!-- section title -->
				
					<!-- /section title -->

					<!-- Products tab & slick -->

						
								<!-- tab -->
							
								
									
									<?php
                    include 'php/includes/dbh.inc.php';
								
                    
					$product_query = "SELECT * FROM product order by productId desc limit 30";
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


		<!-- ======= Hero Section ======= -->
    <section id="hero">

<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
      <div data-aos="zoom-out">
        <h1>SHOP AT YOUR CONVINENTS HOME @<span>DUAFEKUO</span></h1>
        <h2>"Consume Green" and "Patronize Green"...</h2>
        <a href="register.php" class="btn btn-outline-success btn-rounded"
  data-mdb-ripple-color="success">sign-up now.. &nbsp; <i class="fas fa-shopping-cart"></i></a>
       
      </div>
    </div>
    <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
      <img src="images/design2.jpg.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->

		
<!-- recommended start -->
<div class="container"data-aos="zoom-out-up" data-aos-easing="ease-in-out"  >

<!-- =============== SECTION 1 =============== -->
<section class="padding-bottom">
<header class="section-heading mb-4">
<div class="col-md-12">
						<div class="section-title">
							<h5 class="title text-muted mt-4">Cutlery</h5>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Cutlery</a></li>
								
								</ul>
							</div>
						</div>
					</div>
</header>

<div class="row">
	<?php
		//Looping all products in database
		//SQL
		$sql = "SELECT * FROM product WHERE cartegory like '%Cutlery%';";
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
				
 <!-- col.// -->
			<?php
		}
	?>
  
  </div>
   <!-- row.// -->
</section>
<!-- =============== SECTION 1 END =============== -->

</div> 

<!-- customers review -->
<div class="container" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
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
<p>Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!</p>
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
  Effort!Your products is very owesome and afodable.Duafekuo has given me best online shopping Experience I appreciate Your 
  Effort!.</p>
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
<p>I was facing an impossible deadline for a video pitch of my invention to investors. I was about to give up until CJ stepped in, and equipped me to create my first video pitch ever for the biggest event of my life... We got it done in less than a day.</p>
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
<p>Owesome products</p>
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
<p> was facing an impossible deadline for a video pitch of my invention to investors. I was about to give up until CJ stepped in, and equipped me to create my first video pitch ever for the biggest event of my life... We got it done in les.</p>
<i class="fas fa-thumbs-up" style="color:gray;"></i>
<i class="fas fa-laugh" style="color:gray;"></i>
<span class="text-muted">@ kumasi</span>
</div>


	</div>
</div>
    <!-- hlbkbljk -->
    			<!-- container -->
			<div class="container block" data-aos="zoom-in" data-aos-mirror="true">
				<!-- row -->
				<div class="row">
				<div class="col-md-12">
						<div class="section-title">
							<h5 class="title text-muted mt-4">Appliances</h5>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Appliances</a></li>
								
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
				
					
						
						
									
										<!-- product -->
										<?php
                    include 'php/includes/dbh.inc.php';
								
                    
					$product_query = "SELECT * FROM product WHERE cartegory like '%Appliances%';";
                $run_query = mysqli_query($connect,$product_query);
                $results=mysqli_num_rows($run_query);

                    while($row = mysqli_fetch_array($run_query)){
						$pro_id    = $row['productId'];
                        $pro_name   = $row['productName'];
                        $pro_price = $row['productPrice'];
                        $pro_image = $row['productImage'];
                       $pro_desc = $row['productDesc'];
                       $discount=$row['discount'];
                         ?>
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
										
										<!-- /product -->
								
							
							
							
						
				
				
				<!-- /row -->
			</div>
      </div>

		<!-- /HOT DEAL SECTION -->
		

	




<!-- recommended start -->
<div class="container " data-aos="flip-right"
   >

<!-- =============== SECTION 1 =============== -->
<section class="padding-bottom">
<header class="section-heading mb-4">
<div class="col-md-12">
						<div class="section-title">
							<h5 class="title text-muted mt-4">Decor/Crafts</h5>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Decor/Crafts</a></li>
								
								</ul>
							</div>
						</div>
					</div>
</header>

<div class="row">
	<?php
		//Looping all products in database
		//SQL
		$sql = "SELECT * FROM product WHERE cartegory like '%Decor/Crafts%';";
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
				
 <!-- col.// -->
			<?php
		}
	?>
  
  </div>
   <!-- row.// -->
</section>
</div> 
<!-- =============== EDIBLE END =============== -->

<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
           <img src="images/design1.jpg.png"  class="img-fluid animated" alt="">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>OUR  DELIVERY SERVICE IS OWESOME </h3>
            <p>Our online store is second to none</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">WE DELIVER IT TO YOUR DOOR STEP</a></h4>
              <p class="description">We offer you best 24/7 delivery service to your geographical place</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">APPLIANCES</a></h4>
              <p class="description">We have the best africa wores,cosmetics and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">DECOR/CRAFT</a></h4>
              <p class="description">We have the best africa wores,cosmetics and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



<!-- wooden product start -->
<div class="container " data-aos="zoom-in-down">

<!-- =============== SECTION 1 =============== -->
<section class="padding-bottom">
<header class="section-heading mb-4">
<div class="col-md-12">
						<div class="section-title">
							<h5 class="title text-muted mt-4">Utensils</h5>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Utensils</a></li>
								
								</ul>
							</div>
						</div>
					</div>
</header>

<div class="row ">
	<?php
		//Looping all products in database
		//SQL
		$sql = "SELECT * FROM product WHERE cartegory  like '%Utensils%';";
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
										<h4 class='product-price header-cart-item-info'>₵&nbsp;<?=number_format($pro_price,2);?><del class='product-old-price'>₵<?=number_format($discount,2);?></del></h4>
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
				
 <!-- col.// -->
			<?php
		}
	?>
  
  </div>
   <!-- row.// -->
</section>
<!-- =============== SECTION 1 END =============== -->

</div> 
<!-- =============== counter of our review =============== -->
<div class="container">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col" data-aos="fade-right">
  <div class="card count-box " style="background:#03644F;">
  <div class="card-body ">
    <h5 class="card-title text-white text-center">PRODUCTS IN OUR SHOP</h5>
    <p class="card-text text-center">
    <i class="fas fa-box-open fa-3x" style="color:#fff;"></i>
    </p>
    <span class="counter text-white text-center display-5 text-uppercase" style="font-weight:bold;">34,00</span>
  </div>
</div>
</div>
<div class="col" data-aos="fade-down">
  <div class="card count-box " style="background:#03644F;">
  <div class="card-body ">
    <h5 class="card-title text-white text-center">REVIEW</h5>
    <p class="card-text text-center">
    <i class="fas fa-star fa-3x" style="color:yellow;"></i>
    </p>
    <p class="counter text-white ml-5 display-5 text-uppercase" style="font-weight:bold;">4.7</p>
  </div>
</div>
</div>
<div class="col" data-aos="zoom-out-down">
  <div class="card count-box " style="background:#03644F;">
  <div class="card-body ">
    <h5 class="card-title text-white text-center">DELIVERY SERVICE</h5>
    <p class="card-text text-center">
    <i class="fas fa-car fa-3x" style="color:#fff;"></i>
    </p>
    <p class="counter text-white ml-5 display-5 text-uppercase" style="font-weight:bold;">10,000 </p>
  </div>
</div>
</div>
  <div class="col" data-aos="fade-up-right">
  <div class="card count-box" style="background:#03644F;">
  <div class="card-body ">
    <h5 class="card-title text-white text-center">CUSTOMER CARE</h5>
    <p class="card-text text-center">
    <i class="fas fa-bullhorn fa-3x" style="color:#fff;"></i>
    </p>
    <p class="counter text-white ml-5 display-5 text-uppercase" style="font-weight:bold;">100 </p>

    
    
  </div>
</div>
</div>
 
</div>

</div>

<!-- packages product start -->
<div class="container " data-aos="zoom-in-down">

<!-- =============== SECTION 1 =============== -->
<section class="padding-bottom">
<header class="section-heading mb-4">
<div class="col-md-12">
						<div class="section-title">
							<h5 class="title text-muted mt-4">Packages/Disposables</h5>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Packages/Disposables</a></li>
								
								</ul>
							</div>
						</div>
					</div>
</header>

<div class="row">
	<?php
		//Looping all products in database
		//SQL
		$sql = "SELECT * FROM product WHERE cartegory  like '%Packages/Disposables%';";
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
										<h4 class='product-price header-cart-item-info'>₵&nbsp;<?=number_format($pro_price,2);?><del class='product-old-price'>₵<?=number_format($discount,2);?></del></h4>
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
				
 <!-- col.// -->
			<?php
		}
	?>
  
  </div>
   <!-- row.// -->
</section>
<!-- =============== SECTION 1 END =============== -->

</div> 
<!-- section -->
<section id="hero" class="mt-5">

<div class="container">
  <div class="row d-flex align-items-center">
  <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
    <h1>Your new digital online shopping experience with Duafekuo</h1>
    <h2>"Consume Green" and "Patronize Green"...</h2>
    <a href="register.php" class="btn btn-outline-success btn-rounded"
  data-mdb-ripple-color="success">sign-up now.. &nbsp; <i class="fas fa-shopping-cart"></i></a>
  </div>
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
    <img src="images/hero.jpg.png" class="img-fluid" alt="">
  </div>
</div>
</div>

</section><!-- End Hero -->

<!-- wooden end -->

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
      <a href="" class="me-4 text-reset">
        
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

<!-- main items display --> 

<script src="js/main.js"></script>
<!-- owl carousel header -->
<script>
	$(document).ready(function() {
 
 $("#owl-demo").owlCarousel({

	 autoPlay: 3000, //Set AutoPlay to 3 seconds

	 items : 4,
	 itemsDesktop : [1199,3],
	 itemsDesktopSmall : [979,3]

 });

});
</script>





<script type="text/javascript">
$(document).ready(function(){
$(".addCart").on("click",function(event){
  event.preventDefault();
  var $form=$(this).closest(".formload");
var pId= $form.find(".productId").val();
var pName= $form.find(".ProductName").val();
var pPrice= $form.find(".ProductPrice").val();
var pImage= $form.find(".ProductImage").val();
var pDesc= $form.find(".productDesc").val();

$.ajax({
url:"php/pages/cart.php",
method:"POST",
data:{id:pId,name:pName,price:pPrice,image:pImage,desc:pDesc},
success:function(data){
$("#message").html(data);
},
});

});

});
</script>
<!-- TYPED JavaScript CODE SECTION -->
<script src="js/typed.min.js"></script>
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
<!-- model pop up -->
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
<!-- typed javascript -->
<script>

var typed = new Typed('.typed', {
  strings:['africa wore','cosmetics','wooden products',],
  typeSpeed: 250,
  backspeed:250,
  loop:true
});


// var typed = new Typed('.type', {
//   strings:['your ','new','shopping','experice','with','us'],
//   typeSpeed: 250,
//   backspeed:250,
//   loop:true
// });
// var typed = new Typed('.typ', {
//   strings:['your ','new','shopping','experice','with','us'],
//   typeSpeed: 250,
//   backspeed:250,
//   loop:true
// });
// var typed = new Typed('.ty', {
//   strings:['your ','new','shopping','experice','with','us'],
//   typeSpeed: 250,
//   backspeed:250,
//   loop:true
// });
 



 
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  $(document).ready(function(){
    AOS.init();
  })  
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
<!-- jquery slick carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
	$('.slid').slick({
  dots:true,
  infinite:true,
  speed: 300,
  slidesToShow:5,
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
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

</script>
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
        slidesToScroll: 1,
        infinite: true,
        dots: true
	
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
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

<!-- banner slider -->

<script>
	$('.banner').slick({
  dots:true,
  infinite:true,
  speed: 300,
  slidesToShow:1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
 
//   prevArrow:"<span class='prev-arrow'><i class='fas fa-angle-left'></i></span>",
//   nextArrow:"<span class='next-arrow'><i class='fas fa-angle-right'></i></span>",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
	
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
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

<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script>
   $('.counter').counterUp({
    delay: 10,
    time: 1000
});

   </script>
<!-- magnific pop up javacript cdn -->

<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
<!-- smoth jquery -->
<!-- typed javascript -->
<script src="js/typed.min.js"></script>

<!-- bootsrap s5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
								