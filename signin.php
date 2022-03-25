<?php

   include("connection/connect.php"); //INCLUDE CONNECTION
   error_reporting(0); // hide undefine index errors
   session_start(); // temp sessions
   if(isset($_POST['Submit']))   // if button is submit
   {
       $username = $_POST['username'];  //fetch records from login form
       $password = $_POST['password'];
       
       if(!empty($_POST["Submit"]))   // if records were not empty
        {
       $loginquery ="SELECT * FROM users WHERE username ='$username' or password ='$password'"; //selecting matching records
        echo("$username ,$password");
       $result=mysqli_query($db, $loginquery); //executing
       $row=mysqli_fetch_array($result);{} 
       
                               if(is_array($row))  // if matching records in the array & if everything is right
                                   {
                                           $_SESSION["user_id"] = $row['u_id']; // put user id into temp session
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
<!DOCTYPE html>
<html lang="en">

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
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="res.php" class="nav-item nav-link">Restaurant</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link ">Contact</a>
                        <a href="signin.php" class="nav-item nav-link active">SignIn</a>
                    </div>
                    <a href="signup.php" class="btn btn-primary py-2 px-4">SignUp</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">SIGN IN</h1>
                   
                </div>
            </div>
            
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="" class="" data-bs-toggle="modal" data-src="">
                        <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal"></h5>
                        <h1 class="text-white mb-4">Sign In</h1>
                        <form action="" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control w-100 py3" id="name" name="username" placeholder="Your Name">
                                        <label for="name">User Name</label>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="form-floating">
                                        <input type="password" class="form-control w-100"  name="password" value="" placeholder="Your Password">
                                        <label for="">Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="Submit" value="Login">Login</button>
                                </div>
                                <div class="col-12">
                                    <a href="signup.php" class="btn btn-primary w-100 py-3" type="">Not Register Sign Up</a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="btn btn-primary w-100 py-3" type="">Forget Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Reservation Start -->
        

        <!-- Footer Start -->
       <?php
     include("footer.php");
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