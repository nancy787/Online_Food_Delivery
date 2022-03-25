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
       $loginquery ="SELECT * FROM users WHERE username='$username' AND password=($password)"; //selecting matching records
       echo("$username ,$password");
       $result=mysqli_query($db, $loginquery); //executing
       $row=mysqli_fetch_array($result);{} 
       
                               if(is_array($row))  // if matching records in the array & if everything is right
                                   {
                                           $_SESSION["user_id"] = $row['u_id']; // put user id into temp session
                                            header("Location: index.php"); // redirect to index.php page
                                   } 
                               else
                                   {
                                             $message = "Invalid Username or Password!"; 
                                             // throw error
                                             echo $message;
                                   }
        }
       
        else{
            $success="Successfuly";
            echo $success;
        }
       
   }

?>
<!DOCTYPE html>
<html>
    <head><title>INSERT INTO DATABASE</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <?php
    ?>
    <div>
    <form action="" method="post">
       
    <fieldset>
        <span class= "FieldInfo">username:</span>
        <br>
        <input type="text" name="username" values="john"> 
        <br>
        <!-- <span class= "FieldInfo">firstname:</span>
        <br>
        <input type="text" name="firstname" values="john"> 
        <br>
        <span class= "FieldInfo">lastname</span>
        <br>
        <input type="text" name="lastname" values="doe"> 
        <br>
        <span class= "FieldInfo">email:</span>
        <br>
        <input type="email" name="email" values="john@gmail.com">
        <br>
        <span class= "FieldInfo">Phone:</span>
        <br>
        <input type="text" name="phone" values="88899910">
        <br> -->
        <span class= "FieldInfo">password:</span>
        <br>
        <input type="password" name="password" values="">
        <br>
        <!-- <span class= "FieldInfo">confirm pasword:</span>
        <br>
        <input type="password" name="cpassword" values="11111">
        <br>
       
        <span class= "FieldInfo">ADDRESS:</span>
        <br>
        <textarea name="address" rows="8 " cols="80 "></textarea>
        <br> -->
        <input type="submit" name="Submit" value="Submit Your Record">
    </fieldset>

    </form>
    </div>
    </body>
</html>
