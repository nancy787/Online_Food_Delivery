<?php
include("../connection/connect.php");
if(isset($_POST["submit"]))
 {
    // $name=$_POST["name"];
    // $email=$_POST["email"];
    // $subject=$_POST["subject"];
    // $message=$_POST["message"];
    $solution=$_POST["solution"];
    $sql="INSERT INTO contact VALUES ('$solution')";
//   mysqli_query($db,$sql);
  if( mysqli_query($db,$sql))
  {
        echo '<script>alert("Message Sent Successfully");</script>';
  }
  else
  {
    echo '<script>alert("Message Sent Successfully");</script>';
  }
 }

?>

<!DOCTYPE html>
<head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>Subject</th>
            <th>message</th>
        </tr>
    </table>
    <form action="" method="post">
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name">Your Name</label> -->
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name">Email</label> -->
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name"></label> -->
    <!-- <input type="text" class="form-control" name="name" placeholder="Your Name">
    <label for="name">Your Name</label> -->
    <input type="text" class="form-control" name="solution" placeholder="Your Name">
    <label for="name">Your Name</label>
    <input type="submit" value="submit">
</form>
    <?php
 
 $rows=mysqli_query($db,"SELECT * FROM contact");
 foreach($rows as $row):
     ?>
     <tr>
       
         <td><?php echo $row["name"];?> </td>
         <td> <?php echo $row["email"];?></td>
         <td> <?php echo $row["message"];?></td>
         <td> <?php echo $row["solution"];?></td>
         
      </tr>
     <?php endforeach ;?>

             <br>
                                 </tbody>
                                 </table>
</body>
</head>
</html>
