<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "bytetech");
$name=$_SESSION['username'];
$query = "UPDATE cart SET conf=1 , date_time= CURRENT_TIMESTAMP() WHERE u_name='$name' and conf=0"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: confirmation.php"); 
?>