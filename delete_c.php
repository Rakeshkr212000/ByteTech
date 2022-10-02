<?php
$db = mysqli_connect("localhost", "root", "", "bytetech");
$id=$_REQUEST['id'];
$query = "DELETE FROM custom_cart WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: custom_cart.php"); 
?>