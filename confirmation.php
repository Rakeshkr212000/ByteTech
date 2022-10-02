<?php
session_start();
include('bars/header.php');
include("login/db.php");
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Confirmation</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Confirmation</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
		<h5 class="title_confirmation">For canceling order contact our customer care within 2 day from ordered date.</h3>
			<h3 class="title_confirmation">our customer serves section will contact you.</h3>
			<div class="row order_d_inner">

				<?php
				$u_name = $_SESSION["username"];
				$db = mysqli_connect("localhost", "root", "", "bytetech");
				$result = mysqli_query($db, "SELECT * FROM cart where u_name='$u_name' and conf=1 and date_time= CURRENT_TIMESTAMP() ");
				while ($row = mysqli_fetch_array($result)) {
				?>

					<div class="col-lg-4">
						<div class="details_item">
							<h4>Order Info</h4>
							<ul class="list">
								<li><a href="#"><span>Order number</span> : <?php echo $row["id"]; ?></a></li>
								<li><a href="#"><span>Quantity</span> : <?php echo $row["qty"]; ?></a></li>
								<li><a href="#"><span>Date</span> : <?php echo $row["date_time"]; ?></a></li>
								<li><a href="#"><span>Total</span> :<?php echo $row["p_price"]; ?> INR </a></li>
								<li><a href="#"><span>Payment method</span> : Online Payment</a></li>
							</ul>
						</div>
					</div>
				<?php
				}
				?>

				<div class="col-lg-4">
					<?php
					$u_name = $_SESSION["username"];
					$db = mysqli_connect("localhost", "root", "", "bytetech");
					$result = mysqli_query($db, "SELECT * FROM users where username='$u_name' ");
					while ($row = mysqli_fetch_array($result)) {
					?>

						<div class="details_item">
							<h4>Billing Address</h4>
							<ul class="list">
								<li><a href="#"><span>full name </span> : <?php echo $row["f_name"]; ?></a></li>
								<li><a href="#"><span>Address</span> : <?php echo $row["address"]; ?> </a></li>
								<li><a href="#"><span>Postcode </span> : <?php echo $row["pincode"]; ?></a></li>
							</ul>
						</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a href="#"><span>full name</span> : <?php echo $row["f_name"]; ?> </a></li>
							<li><a href="#"><span>Address</span> : <?php echo $row["address"]; ?> </a></li>
							<li><a href="#"><span>Phone number </span> : <?php echo $row["phone_no"]; ?></a></li>
							<li><a href="#"><span>Postcode </span> : <?php echo $row["pincode"]; ?></a></li>
						</ul>
					</div>
				</div>
			<?php
					}
			?>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Price</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$u_name = $_SESSION["username"];
							$db = mysqli_connect("localhost", "root", "", "bytetech");
							$result = mysqli_query($db, "SELECT * FROM cart where u_name='$u_name' and conf=1 and date_time= CURRENT_TIMESTAMP() ");
							while ($row = mysqli_fetch_array($result)) {
							?>


								<tr>
									<td>
										<?php echo $row["item_name"]; ?>
									</td>
									<td>
										<h5>x<?php echo $row["qty"]; ?> </h5>
									</td>
									<td>
										<h5>x<?php echo $row["p_price"]; ?> </h5>
									</td>
									<td>
										<p>₹ <?php echo $row["qty"] * $row["p_price"]; ?></p>
									</td>
								</tr>
							<?php
							}
							?>
							<tr>
								<td></td>
								<td>
								<th align="right"> ₹
									<?php
									$db = mysqli_connect("localhost", "root", "", "bytetech");
									$result = mysqli_query($db, "SELECT * FROM cart where u_name='$u_name' and conf=1 and date_time= CURRENT_TIMESTAMP()");
									$total = 0;
									while ($row = mysqli_fetch_array($result)) {
										$total += $row["qty"] * $row["p_price"];
									}
									echo $total;
									?></td>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</div>
</section>
<!--================End Order Details Area =================-->
<?php
include('bars/footer.php');
?>