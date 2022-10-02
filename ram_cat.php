<?php
include('bars/header.php');
?>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Category<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">RAM</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>mouse<span class="number"></span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="mouse_cat.php">all<span class="number"></span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#beauttyProduct" aria-expanded="false" aria-controls="beauttyProduct"><span
								 class="lnr lnr-arrow-right"></span>processor<span class="number"></span></a>
							<ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
								<li class="main-nav-list child"><a href="proc_cat.php">all<span class="number"></span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"></span>keyboard<span class="number"></span></a>
							<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
								<li class="main-nav-list child"><a href="keyboard_cat.php">all<span class="number"></span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
								 class="lnr lnr-arrow-right"></span>monitor<span class="number"></span></a>
							<ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
								<li class="main-nav-list child"><a href="monitor_cat.php">all<span class="number"></span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span
								 class="lnr lnr-arrow-right"></span>storage<span class="number"></span></a>
							<ul class="collapse" id="beverages" data-toggle="collapse" aria-expanded="false" aria-controls="beverages">
								<li class="main-nav-list child"><a href="s&h_cat.php">all<span class="number"></span></a></li>
								
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span
								 class="lnr lnr-arrow-right"></span>RAM<span class="number"></span></a>
							<ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
								<li class="main-nav-list child"><a href="ram_cat.php">All<span class="number"></span></a></li>
								
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#officeProduct" aria-expanded="false" aria-controls="officeProduct"><span
								 class="lnr lnr-arrow-right"></span>Graphics card<span class="number"></span></a>
							<ul class="collapse" id="officeProduct" data-toggle="collapse" aria-expanded="false" aria-controls="officeProduct">
								<li class="main-nav-list child"><a href="gpu_cat.php">all<span class="number"></span></a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
				<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<form action="#">
							<ul>
								<li class="filter-list"><label for="apple">intel<span></span></label></li>
								<li class="filter-list"><label for="asus">Asus<span></span></label></li>
								<li class="filter-list"><label for="gionee">Nvidia<span></span></label></li>
								<li class="filter-list"><label for="micromax">AMD<span></span></label></li>
								<li class="filter-list"><label for="samsung">coolmaster<span></span></label></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					
				</div>
                <!-- End Filter Bar -->
                
				<?php

$db = mysqli_connect("localhost", "root", "", "bytetech"); 
$result = mysqli_query($db, "SELECT * FROM stock_items WHERE cat='ram'");
?>
<!- Start Best Seller -->
<section class="lattest-product-area pb-40 category-list">


		<div class="row">

		<?php
while($row = mysqli_fetch_array($result))
{
?>
			<!-- single product -->
			<div class="col-lg-4 col-md-6">
				<div class="single-product">
					
			<?php	echo "<img src='./img/".$row['image'] . "'>";
			?>
					
					<div class="product-details">
						<?php
						echo "<h6>".$row['item']."</h6>";
						?>
						<div class="price">
						<?php
						echo "<h6><strike>".$row['price']."</strike></h6>";
						echo "<h6>".$row['discount']."</h6>";?>
						</div>
						<div class="prd-bottom">

							
							<a href="single-product.php?id_i=<?php echo $row['id_i'];?>" class="social-info">
								<span class="lnr lnr-move"></span>
								<p class="hover-text">view more</p>
							</a>
						</div>
					 </div>
				</div>
			</div>
<?php
}
?>
		</div>


	</section>
	<!-- End Best Seller -->
	<!-- Start Filter Bar -->
	<div class="filter-bar d-flex flex-wrap align-items-center">
		
	</div>
	<!-- End Filter Bar -->
</div>
</div>
</div>



<?php
include('bars/footer.php');
?>