<?php


?>
<?php
include("connection/connect.php");
$result = mysqli_query($db,"SELECT * FROM users");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	 
		<td>user id</td>
		
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["u_id"]; ?></td>
		
		<td><a href="change_add.php?u_id=<?php echo $row["u_id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>