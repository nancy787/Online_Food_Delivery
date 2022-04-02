
<?php

include("connection/connect.php"); 
$coupon_code=isset($_POST['coupon_code']);
$discount=isset($_POST['discount']);
$query=mysqli_query($db,"select * from admin_codes where  codes ='$coupon_code' and discount='$discount'");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){
	echo json_encode(array(
				// "statusCode"=>200,
				"value"=>$row['value']
			));
}
else{
	// echo json_encode(array("statusCode"=>201));
}

?>
<!DOCTYPE html>
<html lang="en">
<?php 
// Include configuration file 
include_once 'config1.php'; 
 
// Include database connection file 
 
?>
<?php
include("connection/connect.php");
include("link.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:signin.php');
}
else{
    
    

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
                                            //    $sql ="select username from users";
                                            $ress= mysqli_query($db,"select username from users where ='$_GET[u_id]'");
                                            $rows=mysqli_fetch_array($ress);
                                             
                                             
                                               mysqli_query($db,$sql);
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
						
														mysqli_query($db,$SQL);
														
														$success = "Thankyou! Your Order Placed successfully!";

														
														
													}
												}
                                             
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  
    <link href="css/style1.css" rel="stylesheet"> </head>
<body>
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
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
                    
                    </div>
                    
                    <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								// echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							//   <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
                           
                              echo ' <a href="signin.php" class="nav-item nav-link ">Signin</a>
                              <a href="signup.php" class="btn btn-primary py-2 px-4">Signup</a>';
                              
							}
						else
							{
									//if user is login
									
									// echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a></li>';
									// echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
                                    echo ' <a href="Your_orders.php" class="nav-item nav-link  active">YOUR ORDERS</a>
                                    <a href="logout.php" class="nav-item nav-link text-white">LOGOUT</a>';
							}

						?>
                </div>
                   
							
            </nav>

         
        </div>
          
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      <div class="row">
                        <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item active" ><span>3</span><a href="checkout.php">Order and Pay online</a></li>
                        </div>
                    </ul>
                </div>
            </div>
			
                <div class="container">
                 
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>
					
                </div>
            
			
			
				  
            <div class="container m-t-30">
			<form action="" method="post">
           
					
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">  
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
										
                                            <!-- <table class="table"> 
											<tbody>
                        -->
                        </form>
                        <table>
                        <tr>
                                                        <td><strong>Item Subtotal</strong></td>
                                                        <td> <strong><?php echo  "&nbsp &nbsp"."Rs ".$item_total; ?></strong></td>
                                                    </tr>
                                                    
                                                    <!-- <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td> <?php echo $rows; ?></td>
                                                    </tr> -->
                                                    <tr>
                                                        <!-- <td>Shipping &amp; Handling</td> -->
                                                        <td><strong>free Delivery</strong></td>
                                                    </tr>
                                                    <tr>
                                                    <form method="post"> 
                                                <input type="number" name="tip" placeholder="enter tip" />
                                                <input  type="submit" name="addtip"  class="tn btn-outline-danger m-2" value="Add Tip">
                                                <?php  
                                                    if(isset($_POST['addtip']))  
                                                    {  
                                                        $tip = $_POST['tip'];  
                                                       
                                                         $item_total+=$tip;     
                                              
                                                    }  
                                                    ?>
												</form>
                                                       
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo "Rs ".$item_total ; ?></strong></td>
                                                    </tr>
                                                  
                                                </tbody>
                                               
                                               
												
												         
                                            </table>
                                            
                                         
                    <!-- Important For PayPal Checkout -->
                    <form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                    <!-- <label> Product Name</label> -->
                    <input type="text" name="item_name" id="item" hidden value="<?php echo $item_total?>" required><br><br>
                    <!-- <label>Enter Price</label> -->
                    <input type="number"  name="amount"  required hidden  value="<?php echo $item_total;?>" id="">
                    
                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
					
                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                    <input type="hidden" name="cancel1_return" value="<?php echo PAYPAL_CANCEL1_URL; ?>">
					<br><br>
                    <!-- Display the payment button. -->
                    <input type="submit" class="btn btn-outline-success w-100 my-2" name="submit" border="0" value="Pay online">
                </form>
												 
											   
                                                    <?php  
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo 'var inputname = prompt("Please enter your name", "");';  
    echo 'alert(inputname);';  
    echo '</script>';  
}  
?>  
                            
                                                    
												
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <!-- <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class=""></span> <span class="custom-control-description">Payment on delivery</span>
                                                    <br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-radio  m-b-10">
                                                    <input name="mod"  type="radio" value="paypal" class="custom-control-input"> <span class="sb-pimrf12102679@business.example.com"></span> <span class="">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                            </li>
                                        </ul> -->
                                        <p class="text-xs-center"> <input type="submit" onclick="return confirm('Are you sure?');" name="submit"  class="btn btn-outline-success btn-block w-100" value="cash on delivery"> </p>
                                        
                                       <!-- <a href="index1.php" class="btn btn-success">Order with paypal</a>  -->
                                    
                                    </div>
									</form>
                                </div>
                            </div>
                       
                    </div>
                </div>
				 </form>
            </div>
  
            <!-- start: FOOTER -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Team</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">How It Works</h4>
                        <h5 class="text-light fw-normal">Enter Your Location</h5>
                        <p>Choose A Restaurant</p>
                        <h5 class="text-light fw-normal">Choose A Meal</h5>
                        <p>Pay Online or Offline (Cash On Delivery)</p>
                        <h5 class="text-light fw-normal">Delivery Reaches on Your Door</h5>
                        <p>Wait For Delivery</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Your Queries</h4>
                        <p>Ask Your Queries</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">Foodiee</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="/restu/admin">Admin</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                                <a href="">Seller</a>
                                <a href="">Delivery Guy</a>
                                <?php
                                // include("admin");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
         </div>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>

<?php
}
?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#paypal_form").submit(function(){
            setData(jQuery("#amount").val(), jQuery("#item").val());
        });
        function setData(amount, item) {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            
          };
          xhttp.open("GET", "insertData.php?amount="+amount+"&item="+item, true);
          xhttp.send();
        }
    });

</script>
