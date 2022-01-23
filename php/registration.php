<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="../css.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style>
/** {box-sizing: border-box}
form{
	padding: 27px;
  width: 50%;
  position: relative;
	top: 0;
	left: 400px;
	right: 200px;
	background-color: #d1d1e0;
	overflow: hidden;
}*/
/* Add padding to containers */
/*.container {
  
}*/

/* Full-width input fields */
/*input[type=text], input[type=password],  input[type=email]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}*/

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}</style>
</head>
<body>
  <div class="navbar-expand-sm bg-secondary navbar-dark fixed-top">
    <ul class="navbar-nav nav-tabs">
      <a class="nav-link" href="dashboard.php">&#127968;Home</a>
      <a class="nav-link" href="products.php">&#128722;Products</a>
      <a class="nav-link" href="dashboard.php">&#128276; && Settings</a>
      <a class="nav-link" href="dashboard.php">&#9990;Contacts</a>
      <button class="nav-link" onclick="document.getElementById('login').style.display='block'">Login<span class="badge badge-secondary" style="color:  #cceeff">2</span></button>
    </ul>
     <fieldset id="login" class="form-control text-center collapse">
      <br><br>Login Here <hr><br>
      <form class="needs-validation novalidate" method="POST" action="['PHP_SELF']" class="form-container">
        <div class="lgcontainer">
      <input class="form-group text-center" type="text" placeholder="Type Username Here"name="uname">
      <input class="form-group text-center" type="Password" placeholder="Type Password Here" name="pswd"><br><br>
      <input type="checkbox" name=""> remember me<br>
      <input class="btn-primary" type="submit" name="submit" value="Login">
      </div>
      <br>
      <div>
        <a class="btn-group" href="registration.php"><u>or create account</u></a>
     
      </div>        
       </form>
    </fieldset>
  </div>
  <div class="position-absolute pt-4">
  <form action="form_action.php" method="POST">
  <div class="container">
    <h1 class="text-center ">Registration Form</h1><br>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <label for="email"><b>Adress</b></label>
    <input type="text" placeholder="P.O.BOX 1 MSWAKINI-MONDULI ARUSHA" name="address" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <?php echo date("d.m.Y"); ?>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
   <label for="Register">register</label> 
   <input type="submit" name="submit"class="registerbtn">
  </div>
<?php 
      echo "registered successfuly";
   ?>
  <div class="container signin">
    <p>Already have an account? <a href="javascript:void(0)" onclick="document.getElementById('login')">Sign in</a>.</p>
  </div>
</form>
</div>
 
</body>
</html>