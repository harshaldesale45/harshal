<?php
include 'connect.php';

$imagename=$_POST['imagename'];
$description=$_POST['description'];


$sql_upload="insert into images (imagepath,description) values('$imagename','$description')";



mysqli_query($connect,$sql_upload);

?>