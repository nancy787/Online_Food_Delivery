<?php
// $conn=mysqli_connect("localhost","root","","tracking");
?>
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
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <!-- <a href="signin.php" class="nav-item nav-link">SignIn</a> -->
                
                <!-- <a href="register.php" class="btn btn-primary py-2 px-4">SignUp</a> -->
            </div>
            <?php
						if(empty($_SESSION["delivery_id"])) // if user is not login
							{
							
                              echo ' <a href="signin.php" class="nav-item nav-link">Signin</a>
                              <a href="signup.php" class="btn btn-primary py-2 px-4">Signup</a>';
                              
							}
						else
							{
									
                                    echo ' <a href="pic_his.php" class="nav-item nav-link  active">PickUp History</a>
                                    <a href="delloc.php" class="nav-item nav-link  active">Delivery Location</a>
                                    <a href="../logout.php" class="nav-item nav-link text-white">LOGOUT</a>';
							}

						?>
                </div>
        </nav>
        <table class="table p-4" border=1 cellspacing= 0 cellpadding=10>
            <!-- <?php
            //   $rows=mysqli_query($conn,"SELECT * FROM users where u_id=$_POST[u_id]");
            ?> -->
        <tr class="table-dark">
            <td >#</td>
            <td>Name</td>
            <td>Email</td>
            <td>PhoneNo</td>
            <td>Delivery</td>
            <td>Location</td>
        </tr>

<?php
   $conn=mysqli_connect("localhost","root","","tracking");
    $rows=mysqli_query($conn,"SELECT * FROM track ORDER BY id DESC");
    $i=1;
    foreach($rows as $row):
        ?>
        <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $row["name"];?> </td>
            <td> <?php echo $row["email"];?></td>
            <td> <?php echo $row["phone"];?></td>
            <td><button class="text-decoraton-none btn btn-success" onclick="alert('Item selected to delivery')">DELIVERY NOW</button> </td>
            <td style="width:450px; height : 450px"> <iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"];?>,<?php echo $row["longitude"];?>&h1=es;z=14&output=embed' style="width:100% ; height:100% ;"></iframe></td>
         </tr>
        <?php endforeach ;?>

                <br>
</table>
<a href="index1.php" >indexpage</a>