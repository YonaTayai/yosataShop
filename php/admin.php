<?php 
	include("connection.php");
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>View Customers</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../scripts/jquery-3.6.0.min.js"></script>
	<script>
	$(document).ready(function(){
  	$("tr:even").css("background-color", "#75a3a3");
  	$("tr:even").css("color", "white");
  	 $(".dropdown-toggle").dropdown();
	});
	</script>
</head>
<body>
<div class="navbar-expand-sm bg-secondary navbar-dark fixed-top">
		<ul class="navbar-nav nav-tabs">
			<a class="nav-link" href="dashboard.php">&#127968;Home</a>
			<button class="dropdown-toggle nav-link" data-toggle="dropdown" href="products.php">  &#128722;Products</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">drop1</a>
				<a class="dropdown-item" href="#">drop1</a>
				<a class="dropdown-item" href="#">drop1</a>
			</div>
			<a class="nav-link" href="dashboard.php">&#128276; && Settings</a>
			<a class="nav-link" href="dashboard.php">&#9990;Contacts</a>
			<button class="nav-link" onclick="document.getElementById('login').style.display='block'">Login<span class="badge badge-secondary" style="color:  #cceeff">2</span></button>
		</ul>
	</div>
<div class="container pt-5 ">
	<?php $sql="SELECT * FROM registration";
		$result=mysqli_query($connection,$sql);
		if(mysqli_num_rows($result)>0){?>
			<table class="table">
				<th>Emails </th>
				<th>Address</th>
				<th>Passwords</th>
				<th>Action</th>
				<?php  while($row=mysqli_fetch_assoc($result)){?>
			
				<tr>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><button name="delete">delete</button><button name="update">update</button></td>
				</tr>
				 <?php
			}
		}
		 ?>
		</table>
	</div>

			
</body>
</html>