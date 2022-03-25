<?php
// require ("connection.php");

$conn=mysqli_connect("localhost","root","","restu");
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];
    $query= "INSERT INTO  track  VALUES('','$name','$email','$latitude','$longitude')";
    mysqli_query($conn,$query);
    echo
    "
    <script>
    alert ('Data Added Sucessfully');
    // document.location.href='delloc.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracking</title>
</head>
<body onload="getlocation();"> 
    <form class="myForm" action="" method="post" autocomplete="off">
        <label for="">Name</label>
        <input type="text" name="name"  required value=""> <br>
        <label for="">Email</label>
        <input type="email" name="email"  required value=""> <br>
        <input type="text" name="latitude"  required value=""> 
        <input type="text" name="longitude"  required value=""> <br>
        <button type="submit" name="submit"> Submit </button>
    </form>
   


    <script type="text/javascript">
        function getlocation()
        {
                if(navigator.geolocation)
                {
                    navigator.geolocation.getCurrentPosition(showPosition,showError);
                }            
        }
        function showPosition(position)
        {
                document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;

        }
        function showError(error) {
            switch(error.code)
            {
                case error.PERMISSION_DENIED:
                alert("You Must Allow The Request For Geolocation To Fill Out The Form");
                location.reload();
                break;
           }
        }
    </script>
    <br>
    <a href="data.php">DataBase Page</a>
</body>
</html>