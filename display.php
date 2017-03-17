<?php
include 'connect.php';
$sql_images="select * from images";

$result=mysqli_query($connect,$sql_images);
while($row=mysqli_fetch_array($result))
{
echo '<img src ="images/'.$row[1].'" width="500">';
echo '';
echo $row[2];
echo '<br>';

}
?>