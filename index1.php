<?php 
// Include configuration file 
include_once 'config1.php'; 
 
// Include database connection file 
 
?>
<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'online_rest';
         $mysqli = new mysqli($dbhost, $dbpass,$dbuser, $dbname);
         
         
         echo ('Connected successfully.<br />');
   
         $sql = "SELECT username  FROM  users";
		 
         $result = $mysqli->query($sql);
           
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               printf("username: %s <br />", 
                //   $row["tutorial_id"], 
                //   $row["tutorial_title"], 
                //   $row["tutorial_author"],
                //   $row["submission_date"]);
              $user=  $row["username"]);               
            }
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
        //  $mysqli→close();
      ?>
  

	

                <form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
					
                    <!-- Important For PayPal Checkout -->
                 <label>Enter Product Name</label>
                    <input type="text" name="item_name" id="item" required><br><br>
                    <label>Enter Price</label>
                    <input type="number" required="" name="amount" value="<?php echo $user;?>" id="amount">
                    
                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
					
                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
					<br><br>
                    <!-- Display the payment button. -->
                    <input type="submit" name="submit" border="0" value="Paid">
                </form>

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