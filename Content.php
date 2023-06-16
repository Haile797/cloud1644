
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/h201.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
							 Dragon <span class="primary"> Toy <strong> Bowser</strong></span>
							</h2>
							<!-- <h4 class="caption subtitle">One SIM</h4> -->
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Next new product</a> -->
						</div>
					</li>
					<!-- <li><img src="img/h17.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
							IPhone <span class="primary">15 <strong>Plus</strong></span> -->
							<!-- </h2> -->
							<!-- <h4 class="caption subtitle">One SIM</h4> -->
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Next new product</a>
						</div>
					</li> -->
					 <!-- <li><img src="img/h19.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Iphone <span class="primary">15 <strong>ProMax</strong></span>
							</h2> -->
							<!-- <h4 class="caption subtitle">One SIM</h4> -->
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Next new product</a>
						</div>
					</li> -->
					<!-- <li><img src="img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">& Phone</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li> -->
				<!-- </ul>
			</div> --> 
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel"> 
                           <?php
						  	// include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				             <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <!-- <div class="product-hover">
                                        <a href="?func=dathang&ma=<?php echo  $row['Product_ID']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div> -->
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></del>
                                </div> 
                            </div> 
                 
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> End main content area -->
    
    
   
  