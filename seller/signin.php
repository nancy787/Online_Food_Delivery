<?php

   include("../connection/connect.php"); //INCLUDE CONNECTION
   error_reporting(0); // hide undefine index errors
   session_start(); // temp sessions
   if(isset($_POST['Submit']))   // if button is submit
   {
       $username = $_POST['username'];  //fetch records from login form
       $password = $_POST['password'];
       
       if(!empty($_POST["Submit"]))   // if records were not empty
        {
       $loginquery ="SELECT * FROM seller WHERE username ='$username' or  password ='$password'"; //selecting matching records
        echo("$username ,$password");
       $result=mysqli_query($db, $loginquery); //executing
       $row=mysqli_fetch_array($result);{} 
       
                               if(is_array($row))  // if matching records in the array & if everything is right
                                   {
                                           $_SESSION["s_id"] = $row['seller_id']; // put user id into temp session
                                            header("Location:index.php"); // redirect to index.php page
                                   } 
                               else
                                   {
                                             $message = "Invalid Username or Password!"; 
                                             // throw error
                                             echo $message;
                                   }
        }
       
        else{
            $success=" not Successfuly";
            echo $success;
          
        }
       
   }

?>
			<?php $ress= mysqli_query($db,"select * from restaurant where rs_id='$_GET[res_id]'");
									     $rows=mysqli_fetch_array($ress);
										  
										  ?>
            <!-- <section class="inner-page-hero bg-image" data-image-src="img/ig/dish.jpeg" style="background: url(img/ig/dish.jpeg);"> -->
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    <!-- <figure><?php echo '<img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo">'; ?></figure> -->
                                </div>
                            </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <form class="container" action="" method="post">
        <h1 class="heading">Sign In</h1>
        <p>User Name</p>
        <input type="text" name="name" placeholder="john12" required>
      <p>Password</p>
     <input type="password" name="password" required>
       
        
        <input type="submit" name="Submit" value="Submit &#8594;">
        
    </form>
    <a href="signup.php " class="btn text-center">Not An Account</a>
</body>
</html>
