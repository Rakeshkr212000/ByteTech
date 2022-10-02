<?php
session_start();
include('bars/header.php');
include('login/db.php');
$db = mysqli_connect("localhost", "root", "", "bytetech");
?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Build PC</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">BUILD PC</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
                <div class="check_title">
                    <h1>BOOK YOUR RIG NOW...<?php $_SESSION['username'] ?></h1>
                </div>
            </div>
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>CHOOSE MODEL NAME</h3>
                        

                            <style>
                                body {font-family: Arial;}
                                
                                /* Style the tab */
                                .tab {
                                  overflow: hidden;
                                  border: 1px solid rgb(233, 233, 233);
                                  background-color: #ffffff;
                                }
                                
                                /* Style the buttons inside the tab */
                                .tab button {
                                  background-color: inherit;
                                  float: left;
                                  border: none;
                                  outline: none;
                                  cursor: pointer;
                                  padding: 14px 16px;
                                  transition: 0.3s;
                                  font-size: 17px;
                                }
                                
                                /* Change background color of buttons on hover */
                                .tab button:hover {
                                  background-color: rgb(255, 187, 0);
                                }
                                
                                /* Create an active/current tablink class */
                                .tab button.active {
                                  background-color: rgb(255, 208, 0);
                                }
                                
                                /* Style the tab content */
                                .tabcontent {
                                  display: none;
                                  padding: 6px 12px;
                                  border: 1px solid rgb(221, 221, 221);
                                  border-top: none;
                                }
                                </style>
                                
                                <body>
                                
                                
                                
                                <div class="tab">
                                <?php
                                $res = mysqli_query($db, "SELECT * FROM custom_built ");
while($ro = mysqli_fetch_array($res))
    {
      ?>
      <button class="tablinks" onclick="openCity(event, '<?php echo $ro['item'];?>')"><?php echo $ro['item'];?></button>
                                  <!-- <button class="tablinks" onclick="openCity(event, 'BT PREDATOR')">BTPREDATOR</button> -->
                                  <!-- <button class="tablinks" onclick="openCity(event, 'BT ELDERFLAME')">BTELDERFLAME</button>
                                  <button class="tablinks" onclick="openCity(event, 'BT OPERATOR')">BTOPERATOR</button>
                                  <button class="tablinks" onclick="openCity(event, 'BT VASUANNAN')">BT VASUANNAN</button>
                                  <button class="tablinks" onclick="openCity(event, 'BT SMITU')">BTSMIU</button> -->
                                <?php  }?>
                                </div>
<?php

    if (isset($_POST['add'])){
	unset($error);
	$u_name=$_SESSION["username"];
	$message    = stripslashes($_REQUEST['message']);
	$message    = mysqli_real_escape_string($db, $message);
	$price    = stripslashes($_REQUEST['price']);
	$price    = mysqli_real_escape_string($db, $price);
	$item_name    = stripslashes($_REQUEST['item_name']);
	$item_name    = mysqli_real_escape_string($db, $item_name);
	// $query    = "INSERT into `cart` (p_price,qty,item_name)
	// VALUES ('".$p_price."','".$qty."', '".$item_name."')";
	$query = $db->prepare("INSERT INTO custom_cart (u_name, item_name,price,message) VALUES (?, ?, ?,?)");
	$query->bind_param("ssis",$u_name, $item_name, $price, $message);
  $query->execute();
  
// $result   = mysqli_query($db, $query);
}
?>

 <?php

 $result = mysqli_query($db, "SELECT * FROM custom_built ");
while($row = mysqli_fetch_array($result))
    {

?>
<form method="post">
                                <div id="<?php echo $row['item'];?>" class="tabcontent">
                               <?php echo "<img src='./img/custom build/".$row['image'] . "' style='width:200px;' >";?>
                                  <h3><?php echo $row['item'];?> specification</h3>
                                  <h3><b>₹<?php echo $row['price'];?></b></h3><h3>Advance payment:<b>₹20000</b></h3>
                                  
                                  <input type="hidden" name="u_name" value="<?php  echo $_SESSION['username']; ?>">
						                      <input type="hidden" name="price" value="<?php echo $row['price'];?>">
                                  <input type="hidden" name="item_name" value="<?php echo $row['item'];?>">
                         
                                  <p><?php echo $row['about'];?></p>
                                  <h3>SPECIFY OUR CUSTOM REQUIRMENT IF NEEDED</h3>
                                  <h5>comment what you need to remove and what to be add.Our techniceans will do the rest! </h5>
                                  <textarea class="form-control" name="message" id="message" rows="1" placeholder="TYPE REQUIRMENT"></textarea>
                                  <input type="submit" name="add" style="margin-top:5px;" onclick="popUp()" class="btn btn-success" value="Add to Cart" />
                                </div>
</form>
   <?php } ?>
<script>
function popUp() {
  alert("added to cart!");
}
</script>

                                <script>
                                function openCity(evt, cityName) {
                                  var i, tabcontent, tablinks;
                                  tabcontent = document.getElementsByClassName("tabcontent");
                                  for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                  }
                                  tablinks = document.getElementsByClassName("tablinks");
                                  for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                  }
                                  document.getElementById(cityName).style.display = "block";
                                  evt.currentTarget.className += " active";
                                }
                                </script>
                      
</body>

                            
                           
                          <?php
                          ?>              
                            

                    </div>
                    
                
                </div>
                
            </div>
            
        </div>
    </section>
    <!--================End Checkout Area =================-->
    <?php
include('bars/footer.php');
?>