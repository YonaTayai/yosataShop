<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
<?php 
	$dir="../products/";
	$prdct=$dir.basename($_FILES['uploads']['name']);
	if (isset($_POST['submit'])){
		move_uploaded_file($_FILES['uploads']['name'], $prdct);
			$prdt=$_POST['uploads']['name'];

		$query="INSERT INTO products (prName) VALUES('$prdt')";

		if (mysqli_query($connection,$query)) {
			echo basename($_FILES['uploads']['name']) . " added successfuly";
		}
		
	}
 ?>
</body>
</html>
