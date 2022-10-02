<?php
$db = mysqli_connect("localhost", "root", "", "bytetech");
$id=$_REQUEST['id_i'];
$query = "DELETE FROM custom_cart WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: c_order.php"); 
?>