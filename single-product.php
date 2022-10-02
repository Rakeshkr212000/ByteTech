<?php
session_start();
include('bars/header.php');
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Product Details Page</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html">product-details</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<?php
$db = mysqli_connect("localhost", "root", "", "bytetech");


//////add cart
if (isset($_POST['add'])) {
	unset($error);
	$u_name = $_SESSION["username"];
	$qty    = stripslashes($_REQUEST['qty']);
	$qty    = mysqli_real_escape_string($db, $qty);
	$p_price    = stripslashes($_REQUEST['p_price']);
	$p_price    = mysqli_real_escape_string($db, $p_price);
	$item_name    = stripslashes($_REQUEST['item_name']);
	$item_name    = mysqli_real_escape_string($db, $item_name);
	// $query    = "INSERT into `cart` (p_price,qty,item_name)
	// VALUES ('".$p_price."','".$qty."', '".$item_name."')";
	$query = $db->prepare("INSERT INTO cart (u_name, item_name,qty,p_price) VALUES (?, ?, ?,?)");
	$query->bind_param("ssii", $u_name, $item_name, $qty, $p_price);
	$query->execute();
	// $result   = mysqli_query($db, $query);
}

///////////
if (isset($_GET['id_i'])) {
	$result = mysqli_query($db, "SELECT * FROM stock_items WHERE id_i='$_GET[id_i]'");
	
} else {
	echo "data is missing";
	exit();
}
$item_name = '';
while ($row = mysqli_fetch_array($result)) {

	$item_name = $row['item'];
?>

	<!--================Single Product Area =================-->
	<form method="post">
		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">
					<div class="col-lg-6">
						<div class="s_Product_carousel">
							<div class="single-prd-item">
								<?php echo "<img src='./img/" . $row['image'] . "'>"; ?>
							</div>
							<div class="single-prd-item">
								<?php echo "<img src='./img/" . $row['image'] . "'>"; ?>
							</div>
							<div class="single-prd-item">
								<?php echo "<img src='./img/" . $row['image'] . "'>"; ?>
							</div>
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="s_product_text">
							<h3><?php echo $row['item'] ?></h3>
							<h2>₹<?php echo $row['discount']; ?></h2>
							<h6>₹<strike><?php echo $row['price']; ?></strike></h6>
							<input type="hidden" name="u_name" value="><?php echo $_SESSION['username']; ?>">
							<input type="hidden" name="p_price" value="<?php echo $row['discount']; ?>">
							<input type="hidden" name="item_name" value="<?php echo $row['item']; ?>">


							<ul class="list">
								<li><a class="active" href="#"><span>Category</span> : <?php echo $row['cat']; ?></a></li>
								<li><a href="#"><span>Availibility</span> : In Stock</a></li>
							</ul>
							<p> <?php echo $row['about']; ?> </p>
							<div class="product_count">
								<label for="qty">Quantity:</label>
								<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
							</div>
							<div class="card_area d-flex align-items-center">
								<input type="submit" name="add" onclick="popUp()" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
								<!-- <a href="cart.php?u_name=<?php echo $_SESSION['username']; ?>&p_price=<?php echo $row['discount']; ?>&item_name=<?php echo $row['item']; ?>"  class="btn btn-success" >add to cart</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script>
		function popUp()
		{
		 alert("added to cart!");
		}
		 </script>
<?php
}
?>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>

			</li>
		</ul>


		<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
			<div class="row">
				<div class="col-lg-6">
					<div class="row total_rate">
					</div>
					<div class="review_list">

						<?php
						$p = mysqli_query($db, "SELECT * FROM product_review WHERE item_name='".$item_name."'");
						while ($r = mysqli_fetch_array($p)) {
						?>
							<div class="review_item">
								
								<div class="media">
									<div class="media-body">


										<?php echo "<h4>" . $r['u_name'] . "</h4>"; ?>


									</div>
								</div>
								<?php echo "<p>" . $r['review'] . "</p>"; ?>
								
							</div>
						<?php
						}
						?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="review_box">
						<h3>
							<p>write your review:</p>
						</h3>
						<form class="row contact_form" action="product_review.php?item_name=<?php echo $item_name; ?>&id_i=<?php echo $_GET['id_i']; ?>" method="GET" id="contactForm" novalidate="novalidate">
							<!-- <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div> -->
							<!-- <div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>
									</div> -->
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" name="review" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<input type="hidden" name="item_name" value="<?php echo $item_name; ?>">
								
								<input type="hidden" name="id_i" value="<?php echo $_GET['id_i'] ?>">
								<button type="submit" class="primary-btn">Submit Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!--================End Product Description Area =================-->


<?php
include('bars/footer.php');
?>