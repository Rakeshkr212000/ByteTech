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
                    <h1 class="h3 mb-2 text-gray-800">Stock items</h1>
                    <p class="mb-4">Full Stock items in our store.</p>

 <!-- insert data  -->                           
 <?php

        $db = mysqli_connect("localhost", "root", "", "bytetech");

        $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
      $item = mysqli_real_escape_string($db, $_POST['item']);
      $cat = mysqli_real_escape_string($db, $_POST['cat']);
      $price = mysqli_real_escape_string($db, $_POST['price']);
      $discount = mysqli_real_escape_string($db, $_POST['discount']);
      $about = mysqli_real_escape_string($db, $_POST['about']);

  	// image file directory
  	$target = "../img/".basename($image);

  	$sql = "INSERT INTO stock_items (image, item,cat, about, price , discount ) VALUES ('$image', '$item','$cat' ,'$about', '$price' , '$discount')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
 
  $result = mysqli_query($db, "SELECT * FROM stock_items");
?>

<!--DELETE DATA -->
<?php
$db = mysqli_connect("localhost", "root", "", "bytetech");

if (isset($_POST['delete']))
{
    $item=$_POST['delete'];

    $sql="DELETE FROM item_stock WHERE item='$item'";
    $query_run= mysqli_query($db, $sql);
    
    if($query_run)
    {
        $_SESSION['success']="deleted";
    }
    else
    {
        $_SESSION['status']="not deleted";
       
    }
}


?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                        {
                            echo '<h2>'.$_session['session'].'</h2>';
                            unset($_session['success']);
                        }
                        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                        {
                            echo '<h2>'.$_session['status'].'</h2>';
                            unset($_session['status']);
                        }
                        ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_i</th>
                                            <th>item</th>
                                            <th>catogory</th>
                                            <th>image</th>
                                            <th>about</th>
                                            <th>price</th>
                                            <th>discount</th>
                                        </tr>
                                    </thead>

                                    <?php

                                    while($row = mysqli_fetch_array($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row['id_i']."</td>";
                                            echo "<td>".$row['item']."</td>";
                                            echo "<td>".$row['cat']."</td>";
                                            echo "<td>";
                                            echo "<img src='../img/".$row['image'] . "' style='width:100px;' >";
                                            echo "</td>";
                                            echo "<td>".$row['about']."</td>";
                                            echo "<td>".$row['price']."</td>";
                                            echo "<td>".$row['discount']."</td>";?>
                                            
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