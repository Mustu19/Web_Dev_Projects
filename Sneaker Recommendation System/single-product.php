<?php 
include 'header.php'; 
include 'conn.php';
?>	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="assets/img/products/product-img-5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>SneakyPairs</h3>
						<p class="single-product-pricing"><span>Price</span>Rs.7500</p>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
			
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Nike Wired</h3>
						<p class="product-price"><span>Price</span>Rs.15000</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Adidas</h3>
						<p class="product-price"><span>Price</span>Rs.10000</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Campus</h3>
						<p class="product-price"><span>Price</span>Rs.3000</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end more products -->

	<?php include 'footer.php'; ?>