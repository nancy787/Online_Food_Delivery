<?php

include("connection/connect.php");
if(isset($_POST['searchbtn']))
  {
    
      $str=$_POST['search'];
   $sql="select * from dishes where title like '%$str%' or slogan like '%$str%'";
  $res=mysqli_query($db,$sql);
  if(mysqli_num_rows($res)>0)
  {
        // echo "succesfully fetched data";
        while($row=mysqli_fetch_assoc($res))
        {
                echo $row['title'];
        }
  }
  else
  {
      echo "no data found";
  }
  }
?>
<!DOCTYPE html>
<head>
    <body>
        <form action="" method="post"> 
            <input type="text"  name="search">
            <input type="submit" name="searchbtn">
        </form>
    </body>
</head>
</html>