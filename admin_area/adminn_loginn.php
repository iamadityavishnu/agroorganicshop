<?php
include("includes/dbconnect.php");

session_start();

if(isset($_SESSION['admin_email'])){
	session_unset();
	session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}

#container{
	width: 500px;
	margin: 20px auto;
	margin-top: 10%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
	<div id="container"> <!-- container begins -->
	<h2>Admin Login</h2>

		<form action="" method="post">
		  <div class="container">
		    <label for="uname"><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="uname" required>

		    <label for="psw"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>
		        
		    <button type="submit" name="submit">Login</button>
		  </div>

		  <div class="container" style="background-color:#f1f1f1">
		    <button type="button" class="cancelbtn">Cancel</button>
		    <span class="psw">Forgot <a href="#">password?</a></span>
		  </div>
		</form>
	</div> <!-- container ends -->
</body>
</html>


<?php

if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	$pwd = $_POST['psw'];

	$get_admin = "select unamee, pwdd from adminss WHERE unamee='$uname' AND pwdd='$pwd'";
	$run_admin = mysqli_query($con, $get_admin);
	$row_admin = mysqli_fetch_array($run_admin);

	if($row_admin != NULL){
		$_SESSION['admin_email'] = $uname;
		$_SESSION['timeout'] = time();
		echo "<script>alert('Your are logged in')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		echo "<script>window.open('adminn_loginn.php','_self')</script>";
	}
}

?>