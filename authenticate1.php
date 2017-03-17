<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
	   background-image: url("final.jpg");
    background-size: 1500px;
  }
  </style>
  </head>
  <body >
  
<?php
include 'connect.php';

$email =$_POST['email'];
$password =$_POST['password'];


$sql_user ="SELECT * FROM users WHERE email ='$email' AND password='$password'";
$result_user =mysqli_query($connect, $sql_user);
if (mysqli_num_rows($result_user) <=0)
{
		echo "<div style ='color:black' align='center' font size:'18'>no user found with such email ID and PASSWORD</div>";
		
}
else
{
	echo "<div style ='color:black' align='center'>USER LOGIN SUCCESSFULLY<br>";
	
	$row_user= mysqli_fetch_array($result_user);
	
	session_start();
	$_SESSION['email']= $email;
	$_SESSION['name']= $row_user['name'];
	$_SESSION['userid']=$row_user['userid'];
	echo "<div style ='color:black' align='center'>WELCOME&nbsp &nbsp &nbsp<br>".$_SESSION['name'];
    $_SESSION['isloggedin']=true;
	
	
	}

?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
<form>

    <button type='submit' name='login_submit' value="submit" class="btn btn-success" align ="center"><a href="secondabhi.php" style="color: white" align="center">GO TO HOME PAGE</a></button>
	</form>
</div>

  </div>
</div>
	
	</body>
	</html>