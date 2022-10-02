<?php
session_start();
include('bars/header.php');

?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
           
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <?php
                        $u_name=$_SESSION["username"];
                        $db = mysqli_connect("localhost", "root", "", "bytetech");
                        $result = mysqli_query($db, "SELECT * FROM users where username='$u_name' ");
                         while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="col-md-6 form-group p_star">
                                <b>username:</b>
                                <input type="text" class="form-control" id="first" value="<?php echo $_SESSION["username"]  ?>" name="name">
                                <span class="placeholder"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <b>fullname:</b>
                                <input type="text" class="form-control" id="last" value="<?php echo $row["f_name"]; ?>" name="name">
                                <span class="placeholder" ></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <b>phone number:</b>
                                <input type="text" class="form-control" id="number" value="<?php echo $row["phone_no"]; ?>" name="number">
                                <span class="placeholder" ></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <b>Email address:</b>
                                <input type="text" class="form-control" id="email" value="<?php echo $row["email"]; ?>" name="compemailany">
                                <span class="placeholder" ></span>
                            </div>
                           
                            <div class="col-md-12 form-group p_star">
                                <b>Address</b>
                                <input type="text" class="form-control" id="city" value="<?php echo $row["address"]; ?>" name="city">
                                <span class="placeholder"></span>
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <b>Pincode:</b>
                                <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $row["pincode"]; ?>" >
                            </div>
                            
                           <?php
                         }
                           ?>
                        </form>
                    </div>


<!-- Your order list -->
                    


                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            
                            <table class="table table-bordered">
                    <tr>
                        <th width="30%">Product Name</th>
                        <th width="10%">Full Price</th>
                        <th width="13%"></th>
                        <th width="10%">Total Price</th>
                    </tr>

                    <?php
                    $u_name=$_SESSION["username"];
                    $db = mysqli_connect("localhost", "root", "", "bytetech");
                    $result = mysqli_query($db, "SELECT * FROM custom_cart where u_name='$u_name' and conf_c=0");
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                        <td><?php echo $row["item_name"]; ?></td>
                            
                            <td>₹ <?php echo $row["price"]; ?></td>

                        </tr>
                        <?php

                        ?>
                    <?php
                    }
                    ?>
                    <tr>
                    <td colspan="3" align="right"></td>
                        <th align="right"> ₹
                            <?php
                            $db = mysqli_connect("localhost", "root", "", "bytetech");
                            $result = mysqli_query($db, "SELECT * FROM custom_cart where u_name='$u_name' and conf_c=0");
                            $total = 0;
                            while ($row = mysqli_fetch_array($result)) {

                                
                                $total= $row["price"];
                            }
            ?>
                            <?php
                            echo $total;
                            ?>₹
                        </th>
                    
                    
                    </tr>
                </table>




                            <div class="payment_item">
                                <!-- <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Cash on Delivery</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                        </div>

                            <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="primary-btn" href="update_c_cart.php?action=<?php echo $_SESSION["username"]  ?> ">Proceed to checkout</a>
                                    </div> -->
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Online Banking</label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>online payment; you can pay with your credit card if you don’t have a PayPal or Gpay
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <a class="primary-btn" href="card_c.php?action=<?php echo $_SESSION["username"]  ?>">Proceed to card payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <?php
include('bars/footer.php');
?>