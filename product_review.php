<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "bytetech"); 

if (isset($_GET['review']) && isset($_GET['item_name']))
{
	unset($error);
	$id_i=$_GET['id_i'];
    $item=$_GET['item_name'];
	$u_name=$_SESSION["username"];
	$review    = stripslashes($_REQUEST['review']);
	$review    = mysqli_real_escape_string($db, $review);
	$query = $db->prepare("INSERT INTO product_review (u_name, item_name,review) VALUES (?, ?,?)");
	$query->bind_param("sss",$u_name, $item, $review);
	$query->execute();
	header("Location: single-product.php?id_i=". $id_i);
    
}


if(isset($_GET['item_name']))
	 {
		$result = mysqli_query($db, "SELECT * FROM stock_items WHERE item_name='$_GET[item_name]'");
	 }else{
		header("Location: single-product.php?id_i=". $_GET['id_i']);
		 exit();
	 }


