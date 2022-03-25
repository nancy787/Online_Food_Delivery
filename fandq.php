<?php
 include("connection/connect.php");
 if(isset($_POST["submit"]))
 {
   
//     $solution=$_POST["solution"];
//     $sql="INSERT INTO contact VALUES ('$solution')";
//   mysqli_query($db,$sql);
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
    <h1 class="text-center  p-4 text-danger">F AND Q</h1>
<table id="myTable" class="table table-bordered table-striped   text-center m-4 p-4">
                                        <thead class="table-primary text-center"">
                                            <tr class="">
                                                <th>Cusomer Name</th>		
                                                <!-- <th>email</th> -->
                                                <th>Message</th>
                                              <th>solution</th>
												 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
 
    $rows=mysqli_query($db,"SELECT * FROM contact");
    foreach($rows as $row):
        ?>
        <tr>
          
            <td><?php echo $row["name"];?> </td>
            <!-- <td> <?php echo $row["email"];?></td> -->
            <td> <?php echo $row["message"];?></td>
            <td> <?php echo $row["solution"];?></td>
            
         </tr>
        <?php endforeach ;?>

                <br>
                                    </tbody>
                                    </table>
                                
</body>