<?php
include("../connection/connect.php");
if(isset($_POST["submit"]))
{
    $username=$_POST['uname'];
    $password=$_POST['password'];
  echo  $sql="UPDATE users set password='  $password'where username=' $username '";
    if(mysqli_query($db,$sql))
    {
        echo '<script>alert("password changes successfully")</script>';
    }
    else{
        echo '<script>alert("password not changes")</script>';
        
    }
}
?>
<!DOCTYPE html>
<head>
</head>
<body>
 
    <form action="" method="post">
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name">Your Name</label> -->
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name">Email</label> -->
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name"></label> -->
    <!-- <input type="text" class="form-control" name="uname" > -->
    <label for="name">UserNAme</label>
    <input type="text" class="form-control" name="uname">
    <label for="name">password</label>
    <input type="password" class="form-control" name="password" >
  
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>