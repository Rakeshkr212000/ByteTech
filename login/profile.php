<?php
session_start();
include("db.php")
?>


<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<head>
<link rel="shortcut icon" href="../img/fav.png">
  <meta charset="utf-8" />
  <title>profile</title>
  <link rel="stylesheet" href="profile.css" />
</head>

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.php" >back to home</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['username']; ?></span>
              </div>
      </div>
      </a>
      <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
        <div class=" dropdown-header noti-title">
          <h6 class="text-overflow m-0">Welcome!</h6>
        </div>
        <a href="../examples/profile.html" class="dropdown-item">
          <i class="ni ni-single-02"></i>
          <span>My profile</span>
        </a>
        <a href="../examples/profile.html" class="dropdown-item">
          <i class="ni ni-calendar-grid-58"></i>
          <span>Activity</span>
        </a>
        <a href="../examples/profile.html" class="dropdown-item">
          <i class="ni ni-support-16"></i>
          <span>Support</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#!" class="dropdown-item">
          <i class="ni ni-user-run"></i>
          <span>Logout</span>
        </a>
      </div>
      </li>
      </ul>
  </div>
  </nav>
  <?php
  $db = mysqli_connect("localhost", "root", "", "bytetech");
  if (isset($_SESSION['username'])) {
    $result = mysqli_query($db, "SELECT * FROM users WHERE username='$_SESSION[username]'");
  } else {
    echo "data is missing";
    exit();
  }
  $row = mysqli_fetch_array($result)


  ?>


  <!-- Header -->
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-color: black ; background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">Hello <?php echo $_SESSION['username']; ?></h1>
          <p class="text-white mt-0 mb-5">This is your profile page. You can see your given details and orders </p>
          <a href="logout.php" class="btn btn-info">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Page content -->
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                  <img src="../img/profile_pic.jpg" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          </div>
          <div class="card-body pt-0 pt-md-4">
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                </div>
              </div>
            </div>
            <div class="text-center">
              <h3>
                <?php
                echo $_SESSION['username']; ?> <span class="font-weight-light"></span>
              </h3>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>
              </div>
              <hr class="my-4">
              <p><?php echo $row['address'] ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">My account</h3>
              </div>
              <div class="col-4 text-right">
                <!-- <input type="submit" name="update" value="update" class="btn btn-sm btn-primary"> -->
              </div>
            </div>
          </div>




          <div class="card-body">

            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Username:</label>
                    <br> <?php echo $row['username'] ?>
                    <!-- <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $_SESSION['username']; ?>"> -->
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email address:</label>
                    <br> <?php echo $row['email'] ?>
                    <!-- <input type="email" id="input-email" class="form-control form-control-alternative" placeholder=" email "> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">Full Name</label>
                    <br> <?php echo $row['f_name'] ?>
                    <!-- <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky"> -->
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Address:</label>
                    <br> <?php echo $row['address'] ?>
                    <!-- <input type="email" id="input-email" class="form-control form-control-alternative" placeholder=" email "> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">Phone number:</label>
                    <br> <?php echo $row['phone_no'] ?>
                    <!-- <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky"> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- order table -->

            <hr class="my-4">
            <h6 class="heading-small text-muted mb-4">User Orders</h6>
            <h8>*please note: contact customer care for removal of ordered products within 1 or 2 day from the date of order placed</h8>
            <div class="pl-lg-4">

            <?php
include('../login/db.php');
//fetching data in descending order (latest entry first)
$u_name= $_SESSION['username'];
$resu = mysqli_query($con, "SELECT * FROM cart where u_name='$u_name' and conf=1");
 // using mysqli_query instead
?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Item Order</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>item name</th>
                                            <th>price</th>
                                            <th>qty</th>
                                            <th>order date/time</th>
                                            </tr>
                                    </thead>

                                    <?php

while($ro = mysqli_fetch_array($resu))
{                                     
                                            echo "<tr>";
                                            echo "<td>".$ro['id']."</td>";
                                            echo "<td>".$ro['item_name']."</td>";
                                            echo "<td>₹".$ro['p_price']."</td>";
                                            echo "<td>".$ro['qty']."</td>";
                                            echo "<td>".$ro['date_time']."</td>";
                                            echo "<td><a href='https://discord.gg/KSBsk5a9m6'>customer care</td>";
                                            echo "</tr>"; 
                                        
}                                       
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- --------- -->
  <?php      
            
           $res = mysqli_query($con, "SELECT * FROM custom_cart  where u_name= '$u_name' and conf_c=1 ");
 
?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">custom build order</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>built-name</th>
                                            <th>total </th>
                                            <th>special suggetion</th>
                                            <th>order date/time</th>
                                        </tr>
                                    </thead>

                                    <?php

while($rw = mysqli_fetch_array($res))
{
                                   
                                         echo "<tr>";
                                            echo "<td>".$rw['id']."</td>";
                                            echo "<td>".$rw['u_name']."</td>";
                                            echo "<td>".$rw['item_name']."</td>";
                                            echo "<td>₹".$rw['price']."</td>";
                                            echo "<td>".$rw['message']."</td>";
                                            echo "<td>".$rw['date_time']."</td>";
                                            echo "<td><a href='https://discord.gg/KSBsk5a9m6'>customer care</td>";
                                            echo "</tr>"; 
                                   
} 
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            <hr class="my-4">



            <!-- end of order table -->
            <!-- Address -->
            <!-- <h6 class="heading-small text-muted mb-4">Update</h6> -->
            
            <?php
            if (isset($_POST['add'])) {
              unset($error);
              $u_name = $_SESSION["username"];
              $phone    = $_POST['new_phone_no'];

              $f_name    = $_POST['new_name'];

              $address    = $_POST['new_address'];

              // $query    = "INSERT into `cart` (p_price,qty,item_name)
              // VALUES ('".$p_price."','".$qty."', '".$item_name."')";

              $query = $db->prepare("UPDATE users SET f_name=?, address=?, phone_no=? WHERE username=?");
              $query->bind_param('ssis', $f_name, $address, $phone, $username);
              $query->execute();
              // $result   = mysqli_query($db, $query);
            }
            ?>
            <!-- <h4><i>---------unavailable due to some bug----------</i></h4>
            <form method="post" action="profile.php">
              <div class="col-4 text-right">
                <input type="submit" name="add" value="add or update" class="btn btn-sm btn-primary">
              </div>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">full name</label>
                      <input id="input-address" class="form-control form-control-alternative" name="new_name" placeholder="<?php echo $row['f_name'] ?>" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">Address</label>
                      <input id="input-address" class="form-control form-control-alternative" placeholder="<?php echo $row['address'] ?>" name="new_address" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-city">phone number</label>
                      <input type="number" id="input-city" class="form-control form-control-alternative" placeholder="<?php echo $row['phone_no'] ?>" name="new_phone_no" value="">
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <button type="submit" name="add" value="submit">update</button> -->
            </form>

            <?php
            ?>
            <hr class="my-4">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
          <p class="footer-text m-0">
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved

          </p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>