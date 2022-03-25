<?php
// include("connection/connect.php"); 
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
  
?>
<!DOCTYPE html>
<html lang="en">
<?php

require_once("connection/connect.php");
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
            $check_username= mysqli_query($db, "SELECT username FROM users where username = '$Uname' ");
	        $check_email = mysqli_query($db, "SELECT email FROM users where email = '$email'");
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
                $sql = "INSERT INTO users ".
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
<head>
<?php
   include("link.php");
   ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        

        <!-- Navbar & Hero Start -->

        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>FOODIEE</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="res.php" class="nav-item nav-link">Restaurant</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="signin.php" class="nav-item nav-link ">SignIn</a>
                    </div>
                    <a href="signup.php" class="btn btn-primary py-2 px-4 active">SignUp</a>
                </div>
            </nav>

         
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <!-- <button type="button" class="" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal"> -->
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal"></h5>
                        <h1 class="text-white mb-4">Sign Up</h1>
                        <form action="" method="post">
                            <div class="row g-3">
                            <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="username" placeholder="Your Name">
                                        <label for="name">User Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="firstname" placeholder="Your Name">
                                        <label for="name">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lastname" placeholder="Your Name">
                                        <label for="name">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phone" placeholder="Mobile Number">
                                        <label for="text">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <label for="name">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="cpassword" placeholder="Password">
                                        <label for="name"> Confirm Password</label>
                                    </div>
                                </div>
                            
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" name="address" style="height: 100px"></textarea>
                                        <label for="message">Address</label>
                                    </div>
                                </div>
                              
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="Submit"> Create Account</button>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit"  >Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
        

        <!-- Footer Start -->
        <?php
        include("footer.php")
        ?>
        
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>