<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "bytetech");
$name=$_SESSION['username'];
$query = "UPDATE custom_cart SET conf_c=1 , date_time= CURRENT_TIMESTAMP() WHERE u_name='$name' and conf_c=0"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: conf_c.php"); 
?>