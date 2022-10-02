<?php
// database connection file
$databaseHost = 'localhost';//or localhost
$databaseName = 'bytetech'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

$cser = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>