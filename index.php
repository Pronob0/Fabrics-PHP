<!DOCTYPE html>
<html lang="en">
<?php require 'includes/head.php';?>
<body>
  <!--nav-section start-->

	    <?php
	    session_start();
	    require 'includes/db.php';
    if(isset($_SESSION['id'])){

     require "includes/nav.php"; 
   }
   else{
    require 'includes/nav2.php';

 }
 ?>
<!--nav-section End-->

    <div id="page-content">
      <!-- masterslider -->
     <?php require 'includes/slider.php';?>
      <!-- end of masterslider -->

      <!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/denim.jpg">
									<h4>Denim Fabrics</h4>
									<figcaption> <a href="denim.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12  text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/batik fabrics.jpg">
									<h4>Batik Fabrics</h4>
									<figcaption><a href="batick.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a>
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/cotton.jpg">
									<h4>Cotton Fabrics</h4>
									<figcaption> <a href="cotton.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img class="img-responsive" src="img/content/corduroy.jpg">
									<h4>Corduroy Fabrics</h4>
									<figcaption> <a href="cordoury.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/rayon.jpg">
									<h4>Rayon Fabrics</h4>
									<figcaption> <a href="rayon.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12  text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/Lynen.jpg">
									<h4>Lynen Fabrics</h4>
									<figcaption><a href="lynen.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a>
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/tribal.jpg">
									<h4>Tribal Fabrics</h4>
									<figcaption> <a href="tribal.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img class="img-responsive" src="img/content/oxford.jpg">
									<h4>Oxford Fabrics</h4>
									<figcaption> <a href="oxford.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/polystar.jpg">
									<h4>Polystar Fabrics</h4>
									<figcaption> <a href="polyster.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12  text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/silk.jpg">
									<h4>Silk Fabrics</h4>
									<figcaption><a href="silk.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a>
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/drill.jpg">
									<h4>Drill Fabrics</h4>
									<figcaption> <a href="drill.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img class="img-responsive" src="img/content/wool.jpg">
									<h4>Wool Fabrics</h4>
									<figcaption> <a href="wool.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- star.chef-welcome -->
			<div class="chef-welcome">
				<div class="container">
					<h1 style="color: white">Looking for Fabrics?</h1>
					<p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
				</div>
				<!-- end .container -->
			</div>
			<!--end .chef-welcome-->

			<!--start small-slide section -->
			<div id="sm-slide-section">
				<div class="container">
					<div class="slide-heading text-center">
						<h4>Our Clients Say</h4>
					</div>
					<!--end .clients heading-->
					<div id="slide-content" class="owl-carousel">
						<div class="item">
							<img src="img/content/sm-slide-img1.png" alt="img-1">
							<div class="details">
								<h5><a href="#">Client 1</a>
								</h5>
								<p>Absolutely Nice fabrics! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.png" alt="img-2">
							<div class="details">
								<h5><a href="#">Client 2</a>
								</h5>
								<p>Absolutely Nice fabrics! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img1.png" alt="img-1">
							<div class="details">
								<h5><a href="#">Client 3</a>
								</h5>
								<p>Absolutely Nice fabrics! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.png" alt="img-2">
							<div class="details">
								<h5><a href="#">Client 4</a>
								</h5>
								<p>Absolutely Nice fabrics! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img1.png" alt="img-1">
							<div class="details">
								<h5><a href="#">Client 5</a>
								</h5>
								<p>Absolutely Nice fabrics! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.png" alt="img-2">
							<div class="details">
								<h5><a href="#">Client 6</a>
								</h5>
								<p>Absolutely Nice fabrics! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->
					</div>
					<!-- end i.slide-content -->
				</div>
				<!-- end .container-->
			</div>
			<!-- end .sm-slide-section-->
		</div>
		<!-- end #page-content -->
	</div>
  <?php require "includes/footer.php"; ?>
</body>
</html>