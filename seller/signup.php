<?php
include("../connection/connect.php"); 
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
  
?>
<!DOCTYPE html>
<html lang="en">
<?php

// require_once("../connection/connect.php");
// $sal_err=" ";
$check_username="";
$check_email="";

if(isset($_POST["Submit"]))
{
    $Uname=$_POST["username"];
    $Fname=$_POST["firstname"];
    $Lname=$_POST["lastname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $address=$_POST["address"];
    if(empty($_POST['username'])&& empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['email']) &&  empty($_POST['phone'])&& empty($_POST['password'])&& empty($_POST['cpassword']) && empty($_POST['cpassword']))
    {
         $message= "All fields must be Required!";
         
         echo '<div class="bg-dark" > $message </div>';
         
         
        function_alert("All fields must be Required!");
    }
    else
        {
            $check_username= mysqli_query($db, "SELECT username FROM seller where username = '$Uname' ");
            $check_email = mysqli_query($db, "SELECT email FROM seller  where email = '$email'");
            if($_POST['password'] != $_POST['cpassword']){  //matching passwords
               
            function_alert("Password not match");
         }
         elseif(strlen($_POST['password']) < 6)  //cal password length
        {
        // $message = "";
        function_alert("Password Must be >=6");
        // echo("$message");
        }
        elseif(strlen($_POST['phone']) < 10)  //cal phone length
            {
          
            function_alert("invalid phone number!");
            
            }
            elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
            {
                   
                   function_alert("Invalid email address please type a valid email!");
                  
            }
            elseif(mysqli_num_rows($check_username) > 0)  //check username
            {
              function_alert("username Already exists!");
            }
           elseif(mysqli_num_rows($check_email) > 0) //check email
            {
               function_alert("Email Already exists!");
            }

            else
            {
                $sql = "INSERT INTO seller ".
                   "(username,f_name,l_name,email,phone,password,address) "."VALUES ".
                   "(' $Uname',' $Fname','$Lname',' $email',' $phone','$password','$address')";    
                   if ($db->query($sql) === TRUE) 
                   {
                     function_alert("New record created successfully");
                     } else 
                     {
                       echo "Error: " . $sql . "<br>" . $db->error;
                     }
            }
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registed</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <form class="container" action="" method="post">
        <h1 class="heading">SIGN UP</h1>
        <p>User Name</p>
        <input type="text" name="username" placeholder="john12" > 
       
        <p>First Name</p>
        <input type="text" name="firstname" > 
        <p>Last Name</p>
        <input type="text" name="lastname"  > 
   
        <p>Email</p>
        <input type="email" name="email" placeholder="john12@gmail.com" >
        <p>Mobile Number</p>
      
        <input type="text"  name="phone" maxlength="10"  >
        <p>Password</p>
        <input type="password" name="password" > 
        <p>Confirm Password</p>
        <input type="password" name="cpassword" > 
        <p>Address</p>
        <textarea name="address" cols="30" rows="5" ></textarea>
       <!-- <p>Country</p> -->
       <!-- <input type="text"  name="country" placeholder="india" readonly> -->
        <input type="submit" name="Submit" value="Submit &#8594;">
    </form>
</body>
</html>
