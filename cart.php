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
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">

            <?php
            $u_name = $_SESSION["username"];
            $db = mysqli_connect("localhost", "root", "", "bytetech");
            $re = mysqli_query($db, "SELECT * FROM cart where u_name='$u_name' and conf=0 ");
            $ro = mysqli_fetch_array($re);
            if (isset($ro)) {
            ?>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">Product Name</th>
                            <th width="10%">Quantity</th>
                            <th width="13%">Price Details</th>
                            <th width="10%">Total Price</th>
                            <th width="17%">Remove Item</th>
                        </tr>

                        <?php
                        // $u_name=$_SESSION["username"];
                        // $db = mysqli_connect("localhost", "root", "", "bytetech");
                        $result = mysqli_query($db, "SELECT * FROM cart where u_name='$u_name' and conf=0 ");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["item_name"]; ?></td>
                                <td><?php echo $row["qty"]; ?></td>
                                <td>₹ <?php echo $row["p_price"]; ?></td>
                                <td>
                                    ₹ <?php $total = $row["qty"] * $row["p_price"];
                                        echo $total ?></td>
                                <td><a href="delete.php?action=delete&id=<?php echo $row["id"]  ?>"><span class="text-danger">Remove Item</span></a></td>

                            </tr>
                            <?php

                            ?>
                        <?php
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"> ₹
                                <?php
                                $db = mysqli_connect("localhost", "root", "", "bytetech");
                                $result = mysqli_query($db, "SELECT * FROM cart where u_name='$u_name' and conf=0 ");
                                $total = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $total += $row["qty"] * $row["p_price"];
                                }
                                echo $total;
                                ?>
                            </th>
                            <td>
                        <tr class="out_button_area">
                            <td>



                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="category.php">Continue Shopping</a>
                                    <a class="primary-btn" href="checkout.php">Proceed to checkout</a>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    </table>
                </div>

            <?php
            } else {
            ?>
                <h1> your cart is empty! buy something ! </h1>
                <h5>check your profile to view your orders</h5>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->




<?php
include('bars/footer.php');
?>