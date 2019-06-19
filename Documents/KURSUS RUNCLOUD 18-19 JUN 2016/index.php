<?php
$con=mysqli_connect("127.0.0.1","ttp_wp","MhF=jNCL+ado,e=SQDtkixcNa-r.dciR","ttt_wp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result = mysqli_query($con,"SELECT * FROM wp_users");
?>

<table border="1">
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
	</tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
	<td><?php echo $row['user_login'];?></td>
	<td><?php echo $row['user_email'];?></td>
	<td><?php echo $row['user_pass'];?></td>
</tr>
<?php } ?>
</table>
<?php
mysqli_close($con);
?>