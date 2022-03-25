<?php
include("connection/connect.php");
if(count($_POST)>0) {
    mysqli_query($db,"UPDATE users set address='" . $_POST['address']. "' WHERE u_id='" . $_POST['u_id'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($db,"SELECT * FROM users WHERE u_id='" . $_GET['u_id'] . "'");
    $row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update users Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="u_id" class="txtField" value="<?php echo $row['u_id']; ?>">
<input type="text" name="u_id"  value="<?php echo $row['u_id']; ?>">
<br>
address: <br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>

<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>