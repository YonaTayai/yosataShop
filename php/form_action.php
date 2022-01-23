<?php
  include("connection.php");
    $emai=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['psw'];
    $pass2=$_POST['psw-repeat'];

    $passwordErr=$pass2Err="";
  if (isset($_POST['submit'])) {
      if (empty($email)) {
        $emailErr=""
      } else {
        # code...
      }
      

  	$sql ="INSERT INTO registration (email, address, password,password2) VALUES ('$emai','$address','$password','$pass2')";

  	if (mysqli_query($connection,$sql)) {

  		echo "registered successfuly";
  	}
  
  	else{
  		echo "not registered, please check connectivity";
  	}
  }
  	//mysqli_close($connection);
  
?>
  