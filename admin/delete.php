<?php
$db = mysqli_connect("localhost", "root", "", "bytetech");
$id=$_REQUEST['id_i'];
$query = "DELETE FROM stock_items WHERE id_i=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: stock.php"); 
?>