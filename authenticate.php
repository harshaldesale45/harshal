<?php
include 'connect.php';

$username =$_POST['username'];
$password =$_POST['password'];


$sql_user ="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result_user =mysqli_query($connect, $sql_user);
if (mysqli_num_rows($result_user) <=0)
{
		echo "no user found with such email ID and PASSWORD";
		
}
else
{
	echo "Users login successful<br>";


	$row_user= mysqli_fetch_array($result_user);
	
	session_start();
	$_SESSION['username']= $username;
	$_SESSION['name']= $row_user['name'];
	echo  "Welcome to anti broker  ".$_SESSION['name'];

	$_SESSION['isloggedin']=true;
	echo '<br><br><a href="index1.php" class="b"> Go to home page</a>';
	
	}



?>