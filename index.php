<?php
session_start();
include('bars/header.php');
?>
<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Brand New <br>RTX 3080!</h1>
								<p>The GeForce RTX™ 3080 delivers the ultra performance that gamers crave, powered by Ampere—NVIDIA's 2nd gen RTX architecture.
									It's built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and superfast G6X memory for an amazing gaming experience..</p>

							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
					<!-- single-slide -->
					<div class="row single-slide">
						<div class="col-lg-5">
							<div class="banner-content">
								<h1>AMD ryzen 9 <br> 5950x</h1>
								<p>Ryzen 5000 Series, Vermeer Based High-End Desktop Processor, Ryzen 9 5950X with 16 Cores, 32 Threads at 4.9 GHz,
									Delivers Groundbreaking performance and efficiency on the same 7nm FinFet Node.</p>

							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/banner/banner-2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon1.png" alt="">
					</div>
					<h6>Free Delivery</h6>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon2.png" alt="">
					</div>
					<h6>Return Policy</h6>
					<p></p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon3.png" alt="">
					</div>
					<h6>24/7 Support</h6>
					<p></p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon4.png" alt="">
					</div>
					<h6>Secure Payment</h6>
					<p></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end features Area -->

<!-- Start category Area -->
<section class="category-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c1.png" alt="">
							<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">all types of monitors</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c2.png" alt="">
							<a href="img/category/c2.png" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">HDDs & SSDs</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c3.png" alt="">
							<a href="img/category/c3.png" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">your dream system</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c4.png" alt="">
							<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">processors </h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-deal">
					<div class="overlay"></div>
					<img class="img-fluid w-100" src="img/category/c5.png" alt="">
					<a href="img/category/c5.png" class="img-pop-up" target="_blank">
						<div class="deal-details">
							<h6 class="deal-title">Assessories</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End category Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Latest Products</h1>
						<p>
						</p>
					</div>
				</div>
			</div>



			<?php

			$db = mysqli_connect("localhost", "root", "", "bytetech");
			$result = mysqli_query($db, "SELECT * FROM stock_items order by id_i DESC limit 8");
			?>
			<!- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">


					<div class="row">

						<?php
						while ($row = mysqli_fetch_array($result)) {
						?>

							<!-- single product -->
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<?php echo "<img src='./img/" . $row['image'] . "'>";
									?>
									<div class="product-details">
										<?php
										echo "<h6>" . $row['item'] . "</h6>";
										?>
										<div class="price">
											<?php
											echo "<h6><strike>₹" . $row['price'] . "</strike></h6>";
											echo "<h6>₹" . $row['discount'] . "</h6>"; ?>
										</div>
										<div class="prd-bottom">


											<a href="single-product.php?id_i=<?php echo $row['id_i']; ?>" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>
											</a>
										</div>
									</div>
								</div>
							</div>

						<?php
						} ?>
					</div>
		</div>
	</div>
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>random products</h1>
						<p></p>
					</div>
				</div>
			</div>

			<?php

			$db = mysqli_connect("localhost", "root", "", "bytetech");
			$res = mysqli_query($db, "SELECT * FROM stock_items order by item limit 8");
			?>
			<!- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">


					<div class="row">

						<?php
						while ($ro = mysqli_fetch_array($res)) {
						?>

							<!-- single product -->
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<?php echo "<img src='./img/" . $ro['image'] . "'>";
									?>
									<div class="product-details">
										<?php
										echo "<h6>" . $ro['item'] . "</h6>";
										?>
										<div class="price">
											<?php
											echo "<h6><strike>₹" . $ro['price'] . "</strike></h6>";
											echo "<h6>₹" . $ro['discount'] . "</h6>"; ?>
										</div>
										<div class="prd-bottom">
											<a href="single-product.php?id_i=<?php echo $ro['id_i']; ?>" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>

											</a>
										</div>
									</div>
								</div>
							</div>
						<?php
						} ?>
					</div>

		</div>
	</div>
</section>
<!-- end product Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 no-padding exclusive-left">
				<div class="row clock_sec clockdiv" id="clockdiv">
					<div class="col-lg-12">
						<h1>Build your PC yourself!</h1>
						<p>we can build your custom pc .</p>
					</div>

				</div>
				<a href="custom_build.php" class="primary-btn">Build</a>
			</div>
			<div class="col-lg-6 no-padding exclusive-right">
			<div class="section-title">
						<h1>coming soon</h1>
					</div>
				<div class="active-exclusive-product-slider">
					
					<!-- single exclusive carousel -->
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/product/z2.jpg" alt="">
						<div class="product-details">
							<div class="price">
								<h6>₹15000.00</h6>
								<h6 class="l-through">₹21000.00</h6>
							</div>
							<h4>
								Lenovo 60.4 cm (23.8-inch) FHD Ultra Slim Near Edgeless Monitor with 75Hz</h4>

						</div>
					</div>
					<!-- single exclusive carousel -->
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/product/z1.jpg" alt="">
						<div class="product-details">
							<div class="price">
								<h6>₹17000.00</h6>
								<h6 class="l-through">₹24000.00</h6>
							</div>
							<h4>Acer Nitro VG240YB 23.8 inch Full HD IPS Monitor</h4>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End exclusive deal Area -->

<!-- Start brand Area -->
<section class="brand-area section_gap">
	<div class="container">
		<div class="row">
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/01.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/02.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/03.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/04.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/05.png" alt="">
			</a>
		</div>
	</div>
</section>
<!-- End brand Area -->

<!-- Start related-product Area -->
<section class="related-product-area section_gap_bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">

				</div>
			</div>
		</div>

	</div>
</section>
<!-- End related-product Area -->

<?php
include('bars/footer.php')
?>