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
                    <h1 class="h3 mb-2 text-gray-800">RAM</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                            
                            <?php

        $db = mysqli_connect("localhost", "root", "", "bytetech");

        $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
      $item = mysqli_real_escape_string($db, $_POST['item']);
      $price = mysqli_real_escape_string($db, $_POST['price']);
      $discount = mysqli_real_escape_string($db, $_POST['discount']);
      $about = mysqli_real_escape_string($db, $_POST['about']);

  	// image file directory
  	$target = "../img/".basename($image);

  	$sql = "INSERT INTO stock_items (image, item, about, price , discount ) VALUES ('$image', '$item' ,'$about', '$price' , '$discount')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
 
  $result = mysqli_query($db, "SELECT * FROM stock_items WHERE cat='RAM'");
?>



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">RAM</h6>
                        </div>
                        <div>
                        <form action="stock.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="item" placeholder="item name"><br>
                        <input type="text" name="cat" value="RAM" placeholder="catogory name"><br>
                        <input type="text" name="about" placeholder="enter details"><br>
                        <input type="text" name="price" placeholder="price of product"><br>
                        <input type="text" name="discount" placeholder="discount price"><br>
                        Select image to upload:
                         <input type="file" name="image" id="fileToUpload">
                        <input type="submit" value="submit" name="upload">

                        </form>
                        </div>

                        <div class="card-body">

                    
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
                                        
                                        <td><a href="delete.php?id_i=<?php echo $row["id_i"]  ?>"><span class="text-danger">Remove Item</span></a></td>
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