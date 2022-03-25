<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_rest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset ($_POST["submit"]))
{
    // $seller_id=$_POST["seller_id"];
 $username=$_POST["uname"];
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $phone=$_POST["phone"];
  $address=$_POST["address"];

 $sql = "INSERT INTO seller (username,f_name,l_name,email,phone,password,address) VALUES
            ('$username', '$fname', '$lname','$email','$password','$phone','$address')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
<p>
        <!-- <label for="firstName">seller:</label>
        <input type="text" name="seller_id" id="firstName"> -->
    </p>
<p>
        <label for="firstName">User Name:</label>
        <input type="text" name="uname" id="firstName">
    </p>
     <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="fname" id="firstName">
    </p>
   
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lname" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
        <label for="emailAddress">phone:</label>
        <input type="text" name="phone" id="emailAddress">
    </p>
    <p>
        <label for="emailAddress">password</label>
        <input type="text" name="password" id="emailAddress">
    </p>
    <p>
        <label for="emailAddress">Address</label>
        <input type="text" name="address" id="emailAddress">
    </p>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>