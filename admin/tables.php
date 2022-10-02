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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
</form>

 <!-- Topbar Navbar -->
 <ul class="navbar-nav ml-auto">



<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["username"] ?></span>
        <img class="img-profile rounded-circle"
            src="img/undraw_profile.svg">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li>

</ul>

</nav>
<!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    


<?php
include('../login/db.php');
//fetching data in descending order (latest entry first)

$result = mysqli_query($con, "SELECT * FROM users where usertype= 0 ORDER BY id ASC"); // using mysqli_query instead
?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Data Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>phone number</th>
                                            <th>address</th>
                                            <th>created date</th>
                                            <th>remove acct.</th>
                                        </tr>
                                    </thead>

                                    <?php

while($res = mysqli_fetch_array($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$res['id']."</td>";
                                            echo "<td>".$res['username']."</td>";
                                            echo "<td>".$res['email']."</td>";
                                            echo "<td>".$res['phone_no']."</td>";
                                            echo "<td>".$res['address']."</td>";
                                            echo "<td>".$res['create_datetime']."</td>";
                                           ?>
                                           <td><a href="delete_user.php?id_i=<?php echo $res["id"]  ?>"><span class="text-danger">Remove</span></a></td>
                                           <?php
                                            echo "</tr>";
                                        }
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
include('includes/script.php');
include('includes/footer.php');
?>    