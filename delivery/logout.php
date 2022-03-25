<?php
session_start();
session_destroy();
$url = 'registers.php';
header('Location: ' . $url);

?>