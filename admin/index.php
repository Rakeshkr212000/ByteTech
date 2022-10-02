<?php
session_start();
include('includes/header.php');
include('includes/navebar.php');
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["username"] ?></span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- overview of site -->

        <div class="container-fluid"><b>website overview:</b>
            <h3><u>users:</u></h3>
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">
                    <!--users -->
                    <?php
                    $db = mysqli_connect("localhost", "root", "", "bytetech");
                    $sql = "SELECT count(id) AS total FROM users where usertype=0";
                    $result = mysqli_query($db, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_row = $value['total'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        nuber of users:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_row; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row -->
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">

                    <?php
                    $sq = "SELECT count(id) AS tota FROM cart";
                    $resul = mysqli_query($db, $sq);
                    $valu = mysqli_fetch_assoc($resul);
                    $num_ro = $valu['tota'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        number of orders:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_ro; ?></div>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">

                    <?php
                    $s = "SELECT count(id) AS tot FROM custom_cart";
                    $resu = mysqli_query($db, $s);
                    $val = mysqli_fetch_assoc($resu);
                    $num_r = $val['tot'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        number of custom_built orders:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_r; ?></div>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">

                    <?php
                    $q = "SELECT count(id) AS tol FROM product_review";
                    $res = mysqli_query($db, $q);
                    $va = mysqli_fetch_assoc($res);
                    $num = $va['tol'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        number of complains and reviews:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num; ?></div>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user end -->

        <div class="container-fluid">
            <h3><u>stock items:</u></h3>
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">

                    <?php
                    $q = "SELECT count(id_i) AS tl FROM stock_items";
                    $re = mysqli_query($db, $q);
                    $v = mysqli_fetch_assoc($re);
                    $nu = $v['tl'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        total stock items(parts):</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nu; ?></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">

                    <?php
                    $qrz = "SELECT count(id) AS count FROM custom_built";
                    $resl = mysqli_query($db, $qrz);
                    $vaz = mysqli_fetch_assoc($resl);
                    $numr = $vaz['count'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        total custom-built products:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numr; ?></div>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    parts:
                    <?php
                    // mouse
                    $query = "SELECT count(id_i) AS fully FROM stock_items where cat='mouse'";
                    $product = mysqli_query($db, $query);
                    $items = mysqli_fetch_assoc($product);
                    $equals = $items['fully'];
                    // keyboard
                    $quer = "SELECT count(id_i) AS fulli FROM stock_items where cat='keyboard'";
                    $produc = mysqli_query($db, $quer);
                    $item = mysqli_fetch_assoc($produc);
                    $equal = $item['fulli'];
                    // processor
                    $que = "SELECT count(id_i) AS fulls FROM stock_items where cat='proc'";
                    $produ = mysqli_query($db, $que);
                    $ite = mysqli_fetch_assoc($produ);
                    $equa = $ite['fulls'];
                    // monitor
                    $que = "SELECT count(id_i) AS fullm FROM stock_items where cat='monitors'";
                    $produ = mysqli_query($db, $que);
                    $ite = mysqli_fetch_assoc($produ);
                    $equ = $ite['fullm'];
                    // GPU
                    $qu = "SELECT count(id_i) AS fullz FROM stock_items where cat='GPU'";
                    $prod = mysqli_query($db, $qu);
                    $it = mysqli_fetch_assoc($prod);
                    $eq = $it['fullz'];
                     // SSD&HDD
                     $qz = "SELECT count(id_i) AS fullk FROM stock_items where cat='S&H'";
                     $pro = mysqli_query($db, $qz);
                     $iz = mysqli_fetch_assoc($pro);
                     $e = $iz['fullk'];
                      // GPU
                    $qk = "SELECT count(id_i) AS fulln FROM stock_items where cat='RAM'";
                    $pro = mysqli_query($db, $qk);
                    $ik = mysqli_fetch_assoc($pro);
                    $et = $ik['fulln'];
                    ?>
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        mouse:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $equals; ?></div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        keyboard:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $equal; ?></div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        processor:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $equa; ?></div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        monitor:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $equ; ?></div>
                                    
                                </div>
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        GPU:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $eq; ?></div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        SSD & HDD:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $e; ?></div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        RAM:</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $et; ?></div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-3 col-md-6 mb-4">

            </div>
        </div>
    </div>

    <!-- OVERVIEW OF SITE -->

</div>

<!-- End of Main Content -->

<?php
include('includes/script.php');

?>