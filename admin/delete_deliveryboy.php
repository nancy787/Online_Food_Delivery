<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM delivery WHERE del_id = '".$_GET['del_del']."'");
header("location:alldeliveryboy.php");  

?>
