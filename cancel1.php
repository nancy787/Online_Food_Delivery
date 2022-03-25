<?php 
session_start();
include_once 'config1.php';

$uid = $_SESSION['u_id'];

$insert = $db->query("UPDATE users_orders SET status='cancelled' where id='".$uid."'");
session_destroy();
?>

        <h1 class="error">Your PayPal Transaction has been Canceled</h1>
    <a href="index.php" class="btn-link">Back to Home</a>