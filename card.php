<?php
session_start();

// $db = mysqli_connect("localhost", "root", "", "bytetech");
// $name=$_SESSION['username'];
// $query = "UPDATE cart SET conf=1 WHERE u_name='$name'"; 
// $result = mysqli_query($db,$query) or die ( mysqli_error($db));
// header("Location: confirmation.php"); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Credit Card Payment Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1> <small></small></h1>
        </div>

        <!-- Credit Card Payment Form - START -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <h3 class="text-center">Payment Details</h3>
                                <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="update_cart.php?name=<?php echo $_SESSION["username"]  ?>">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>CARD NUMBER</label>
                                            <div class="input-group">
                                                <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" class="form-control" placeholder="Valid Card Number" required />
                                                <small>eg:0000-0000-0000</small>
                                                <!-- <span class="input-group-addon"><span class="fa fa-credit-card"></span></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                            <!-- <input type="tel" class="form-control" pattern="[0-9]{2}-[0-9]{2}" placeholder="MM - YY" required /> -->
                                            <input type="month" id="bdaymonth" class="form-control" name="bdaymonth" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label>CV CODE</label>
                                            <input type="password" pattern="[0-9]{3}" class="form-control" placeholder="CVC" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>CARD OWNER</label>
                                            <input type="text" class="form-control"  placeholder="Card Owner Names " required />
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <!-- <button type="submit"  href="update_cart.php?name=<?php echo $_SESSION["username"]  ?>" class="btn btn-warning btn-lg btn-block">Process payment</button> -->
                                            <button type="submit" class="btn btn-warning btn-lg btn-block">Process payment</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <style>
            .cc-img {
                margin: 0 auto;
            }
        </style>
        <!-- Credit Card Payment Form - END -->

    </div>

</body>

</html>