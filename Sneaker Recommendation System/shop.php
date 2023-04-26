<?php include 'header.php'; ?>
<?php include 'conn.php'; ?>

<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>STYLISH AND TRENDY</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Nike">Nike</li>
                            <li data-filter=".Puma">Puma</li>
                            <li data-filter=".Adidas">Adidas</li>
							<li data-filter=".Campus">Campus</li>
                            <li data-filter=".Reebok">Reebok</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
					<?php 
			$sql="SELECT * FROM product_info";

			if ($result = mysqli_query($con,$sql)) {
			while($row = $result->fetch_array(MYSQLI_ASSOC)){


			echo '<div class="col-lg-4 col-md-6 text-center '. $row['brand']. '">';
			echo	'<div class="single-product-item">';
			echo	'	<div class="product-image">';
			echo	'<a href="single-product.php"><img src="assets/img/products/'.$row['description'].'" alt=""></a>
					</div>
					<h3>' .$row['brand'].' '.$row['name'].'</h3>
					<p class="product-price"><span>Price</span>'. $row['price'] .'</p>
				</div>
			</div>';

			//echo $row['id']."<br>";

			}
				$result->close();
			}

			?>
				<div class="col-lg-4 col-md-6 text-center Nike">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Nike Wired</h3>
						<p class="product-price"><span>Price</span> Rs.15000 </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Adidas">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Adidas</h3>
						<p class="product-price"><span>Price</span>Rs.10000</p>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Campus">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Campus</h3>
						<p class="product-price"><span>Price</span> Rs.3000 </p>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Nike">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-4.jpg" alt=""></a>
						</div>
						<h3>Nike Imperial</h3>
						<p class="product-price"><span>Price</span> Rs.12500 </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Reebok">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-5.jpg" alt=""></a>
						</div>
						<h3>Reebok</h3>
						<p class="product-price"><span>Price</span> Rs.5500 </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Puma">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-6.jpg" alt=""></a>
						</div>
						<h3>Puma</h3>
						<p class="product-price"><span>Price</span> Rs.9500 </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

	<?php include 'footer.php'; ?>