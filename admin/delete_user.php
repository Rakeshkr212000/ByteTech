<?php
$db = mysqli_connect("localhost", "root", "", "bytetech");
$id=$_REQUEST['id_i'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: tables.php"); 
?>