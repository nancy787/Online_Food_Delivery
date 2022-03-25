<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM seller WHERE seller_id = '".$_GET['seller_del']."'");
header("location:allseller.php");  

?>
