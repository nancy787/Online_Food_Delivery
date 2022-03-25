<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
<?php
session_start(); //start session
session_destroy(); // distroy all the current sessions
$url = 'signup.php';
header('Location: ' . $url); // redireted to login page

?>
</body>
</html>