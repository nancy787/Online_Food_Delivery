<!DOCTYPE html>
<html lang="en">
<head>
   
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Go Guardian Replica</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
       
    </head>

<body>
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>FOODIEE</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse m-4" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4 h6">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="../res.php" class="nav-item nav-link">Restaurant</a>
                    <a href="../about.php" class="nav-item nav-link">About</a>
                    <a href="../contact.php" class="nav-item nav-link">Contact</a>
                    <!-- <a href="signin.php" class="nav-item nav-link">SignIn</a> -->
                
                <!-- <a href="register.php" class="btn btn-primary py-2 px-4">SignUp</a> -->
            </div>
            <?php
						if(!empty($_SESSION["delivery_id"])) // if user is not login
							{
							
                              echo ' <a href="signin.php" class="nav-item nav-link">Signin</a>
                              <a href="signup.php" class="btn btn-primary py-2 px-4">Signup</a>';
                              
							}
						else
							{
									
                                    echo ' <a href="pic_his.php" class="nav-item nav-link  active">PickUp History</a>
                                    <a href="delloc.php" class="nav-item nav-link  active">Delivery Location</a>
                                    <a href="logout.php" class="nav-item nav-link text-white">LOGOUT</a>';
							}

						?>
                </div>
        </nav>

   <div class="row">
    <div class="col-md-6">
        <div class="image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR111EQmralgqwNVMWe8W2IrDN9evKvDGpX-g&usqp=CAU"  width=" 620px">
            <!-- <img src="data:image/jpeg;base64,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" width=" 620px"> -->
           </div>
    </div>
    <div class="col-md-6">
        <div class="">
          <h1 class="text m-4 p-4">
         WE CHOOSE YOU
           CAUSE COUSTOMER TRUST US
          </h1>
        </div>
        <div class="">
            <a href="delloc.php" class="text-decoraton-none btn btn-primary radius-pill" id="btnn">DELIVERY NOW</a>
        </div>
    </div>
  
   </div>
    </div>
</body>
</html>